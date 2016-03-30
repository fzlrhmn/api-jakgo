<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PuskesmasController extends Controller
{
    /**
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getPuskesmas() {

        # query with selected columns from getColumns
        $resultPuskesmas = DB::table('kesehatan_puskesmas')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultPuskesmas);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getPuskesmasById( $id ) {

        # query with selected columns from getColumns
        $resultPuskesmas = DB::table('kesehatan_puskesmas')
            ->select($this->getColumns())
            ->whereIn('id', explode(",",$id))
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultPuskesmas);
    }

    /**
     * @param $resultPuskesmas
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultPuskesmas ) {

        # if parameter format exist and format equal geojson the transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultPuskesmas)
                ->transformWith(function($puskesmas) {
                    return [
                        'id' => (int) $puskesmas->id,
                        'nama_Puskesmas' => $puskesmas->nama,
                        'location' =>[
                            'alamat' => $puskesmas->alamat,
                            'latitude' => (float) $puskesmas->latitude,
                            'longitude' => (float) $puskesmas->longitude,
                        ],
                        'telepon' => explode(', ', $puskesmas->no_telp),
                        'faximile' => explode(', ', $puskesmas->no_fax),
                        'email' => $puskesmas->email,
                        'kepala_puskesmas' => $puskesmas->nama_ka_puskesmas,
                        'kode_kota' => (int) $puskesmas->kode_kota,
                        'kode_kecamatan' => (int) $puskesmas->kode_kecamatan,
                        'kode_kelurahan' => (int) $puskesmas->kode_kelurahan,
                        'shape' => $puskesmas->geometry
                    ];
                })
                ->toArray();

            # init geojson array
            $geojson = ['type' => 'FeatureCollection', 'features' => array() ];

            # iterate transformed data and push it into geojson array
            foreach ($transform['data'] as $data) {

                # init properties with data
                $properties = $data;

                # unset shape and gemotery text properties
                unset($properties['shape']);
                unset($properties['geometry_text']);

                # set geometry from shape data
                $feature = array(
                    'type' => 'Feature',
                    'properties' => $properties,
                    'geometry' => json_decode($data['shape'])
                );

                # Add feature arrays to feature collection array
                array_push($geojson['features'], $feature);
            }

            # init result with geojson array
            $result = $geojson;

        }

        # else if parameter format exist but format is not equal geojson then set result with error code
        elseif(\Request::has('format') && \Request::input('format') != 'geojson'){
            $result = response()->json(["errors" => ["message" => "Parameter unknown", "code" => 200]], 200);
        }

        # else
        else{

            # transform array
            $transform = fractal()
                ->collection($resultPuskesmas)
                ->transformWith(function($puskesmas) {
                    if ( \Request::has('shape') && \Request::input('shape') == true ) {
                        return [
                            'id' => (int) $puskesmas->id,
                            'nama_Puskesmas' => $puskesmas->nama,
                            'location' =>[
                                'alamat' => $puskesmas->alamat,
                                'latitude' => (float) $puskesmas->latitude,
                                'longitude' => (float) $puskesmas->longitude,
                            ],
                            'telepon' => explode(', ', $puskesmas->no_telp),
                            'faximile' => explode(', ', $puskesmas->no_fax),
                            'email' => $puskesmas->email,
                            'kepala_puskesmas' => $puskesmas->nama_ka_puskesmas,
                            'kode_kota' => (int) $puskesmas->kode_kota,
                            'kode_kecamatan' => (int) $puskesmas->kode_kecamatan,
                            'kode_kelurahan' => (int) $puskesmas->kode_kelurahan,
                            'shape' => $puskesmas->geometry_text
                        ];
                    }else{
                        return [
                            'id' => (int) $puskesmas->id,
                            'nama_Puskesmas' => $puskesmas->nama,
                            'location' =>[
                                'alamat' => $puskesmas->alamat,
                                'latitude' => (float) $puskesmas->latitude,
                                'longitude' => (float) $puskesmas->longitude,
                            ],
                            'telepon' => explode(', ', $puskesmas->no_telp),
                            'faximile' => explode(', ', $puskesmas->no_fax),
                            'email' => $puskesmas->email,
                            'kepala_puskesmas' => $puskesmas->nama_ka_puskesmas,
                            'kode_kota' => (int) $puskesmas->kode_kota,
                            'kode_kecamatan' => (int) $puskesmas->kode_kecamatan,
                            'kode_kelurahan' => (int) $puskesmas->kode_kelurahan
                        ];
                    }
                })
                ->toArray();

            # Create array of final response
            $result = [
                "status" => "success",
                "count" => count($transform['data']),
                "data"  => $transform['data']
            ];
        }

        return $result;
    }

    /**
     * @return array
     */
    private function getColumns() {
        return [
            DB::raw('ST_ASGEOJSON(the_geom) as geometry'),
            DB::raw('ST_ASTEXT(the_geom) as geometry_text'),
            'id',
            'nama',
            'alamat',
            'no_telp',
            'no_fax',
            'email',
            'nama_ka_puskesmas',
            'latitude',
            'longitude',
            'kode_kota',
            'kode_kecamatan',
            'kode_kelurahan'
        ];
    }
}
