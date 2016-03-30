<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class KesehatanRsuController extends Controller
{
    /**
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getRsu() {

        # query with selected columns from getColumns
        $resultRsu = DB::table('kesehatan_rumah_sakit_umum')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultRsu);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getRsuById( $id ) {

        # query with selected columns from getColumns
        $resultRsu = DB::table('kesehatan_rumah_sakit_umum')
            ->select($this->getColumns())
            ->whereIn('id', explode(",",$id))
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultRsu);
    }

    /**
     * @param $resultRsu
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultRsu ) {

        # if parameter format exist and format equal geojson the transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultRsu)
                ->transformWith(function($rsu) {
                    return [
                        'id' => (int) $rsu->id,
                        'nama_rsu' => $rsu->nama,
                        'jenis_rsu' => $rsu->jenis,
                        'location' =>[
                            'alamat' => $rsu->alamat,
                            'latitude' => $rsu->latitude,
                            'longitude' => $rsu->longitude,
                        ],
                        'kode_pos' => (int) $rsu->kode_pos,
                        'telepon' => explode(', ', $rsu->no_telp),
                        'faximile' => explode(', ', $rsu->no_fax),
                        'website' => $rsu->website,
                        'email' => $rsu->email,
                        'kode_kota' => (int) $rsu->kode_kota,
                        'kode_kecamatan' => (int) $rsu->kode_kecamatan,
                        'kode_kelurahan' => (int) $rsu->kode_kelurahan,
                        'shape' => $rsu->geometry
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
                ->collection($resultRsu)
                ->transformWith(function($rsu) {
                    if ( \Request::has('shape') && \Request::input('shape') == true ) {
                        return [
                            'id' => (int) $rsu->id,
                            'nama_rsu' => $rsu->nama,
                            'jenis_rsu' => $rsu->jenis,
                            'location' =>[
                                'alamat' => $rsu->alamat,
                                'latitude' => $rsu->latitude,
                                'longitude' => $rsu->longitude,
                            ],
                            'kode_pos' => (int) $rsu->kode_pos,
                            'telepon' => explode(', ', $rsu->no_telp),
                            'faximile' => explode(', ', $rsu->no_fax),
                            'website' => $rsu->website,
                            'email' => $rsu->email,
                            'kode_kota' => (int) $rsu->kode_kota,
                            'kode_kecamatan' => (int) $rsu->kode_kecamatan,
                            'kode_kelurahan' => (int) $rsu->kode_kelurahan,
                            'latitude' => $rsu->latitude,
                            'longitude' => $rsu->longitude,
                            'shape' => $rsu->geometry_text,
                        ];
                    }else{
                        return [
                            'id' => (int) $rsu->id,
                            'nama_rsu' => $rsu->nama,
                            'jenis_rsu' => $rsu->jenis,
                            'location' =>[
                                'alamat' => $rsu->alamat,
                                'latitude' => $rsu->latitude,
                                'longitude' => $rsu->longitude,
                            ],
                            'kode_pos' => (int) $rsu->kode_pos,
                            'telepon' => explode(', ', $rsu->no_telp),
                            'faximile' => explode(', ', $rsu->no_fax),
                            'website' => $rsu->website,
                            'email' => $rsu->email,
                            'kode_kota' => (int) $rsu->kode_kota,
                            'kode_kecamatan' => (int) $rsu->kode_kecamatan,
                            'kode_kelurahan' => (int) $rsu->kode_kelurahan,
                            'latitude' => $rsu->latitude,
                            'longitude' => $rsu->longitude,
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
            'jenis',
            'alamat',
            'kode_pos',
            'no_telp',
            'no_fax',
            'website',
            'email',
            'latitude',
            'longitude',
            'kode_kota',
            'kode_kecamatan',
            'kode_kelurahan'
        ];
    }
}
