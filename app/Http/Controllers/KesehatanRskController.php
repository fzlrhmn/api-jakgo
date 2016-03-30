<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class KesehatanRskController extends Controller
{
    /**
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getRsk() {

        # query with selected columns from getColumns
        $resultRsk = DB::table('kesehatan_rumah_sakit_khusus')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultRsk);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getRskById( $id ) {

        # query with selected columns from getColumns
        $resultRsk = DB::table('kesehatan_rumah_sakit_khusus')
            ->select($this->getColumns())
            ->whereIn('id', explode(",",$id))
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultRsk);
    }

    /**
     * @param $resultRsk
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultRsk ) {

        # if parameter format exist and format equal geojson the transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultRsk)
                ->transformWith(function($rsk) {
                    return [
                        'id' => (int) $rsk->id,
                        'nama_Rsk' => $rsk->nama,
                        'jenis_Rsk' => $rsk->jenis,
                        'alamat' => $rsk->alamat,
                        'kode_pos' => (int) $rsk->kode_pos,
                        'telepon' => explode(', ', $rsk->no_telp),
                        'faximile' => explode(', ', $rsk->no_fax),
                        'website' => $rsk->website,
                        'email' => $rsk->email,
                        'kode_kota' => (int) $rsk->kode_kota,
                        'kode_kecamatan' => (int) $rsk->kode_kecamatan,
                        'kode_kelurahan' => (int) $rsk->kode_kelurahan,
                        'shape' => $rsk->geometry
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
                ->collection($resultRsk)
                ->transformWith(function($rsk) {
                    if ( \Request::has('shape') && \Request::input('shape') == true ) {
                        return [
                            'id' => (int) $rsk->id,
                            'nama_rsk' => $rsk->nama,
                            'jenis_rsk' => $rsk->jenis,
                            'alamat' => $rsk->alamat,
                            'kode_pos' => (int) $rsk->kode_pos,
                            'telepon' => explode(', ', $rsk->no_telp),
                            'faximile' => explode(', ', $rsk->no_fax),
                            'website' => $rsk->website,
                            'email' => $rsk->email,
                            'kode_kota' => (int) $rsk->kode_kota,
                            'kode_kecamatan' => (int) $rsk->kode_kecamatan,
                            'kode_kelurahan' => (int) $rsk->kode_kelurahan,
                            'latitude' => $rsk->latitude,
                            'longitude' => $rsk->longitude,
                            'shape' => $rsk->geometry_text,
                        ];
                    }else{
                        return [
                            'id' => (int) $rsk->id,
                            'nama_Rsk' => $rsk->nama,
                            'jenis_Rsk' => $rsk->jenis,
                            'alamat' => $rsk->alamat,
                            'kode_pos' => (int) $rsk->kode_pos,
                            'telepon' => explode(', ', $rsk->no_telp),
                            'faximile' => explode(', ', $rsk->no_fax),
                            'website' => $rsk->website,
                            'email' => $rsk->email,
                            'kode_kota' => (int) $rsk->kode_kota,
                            'kode_kecamatan' => (int) $rsk->kode_kecamatan,
                            'kode_kelurahan' => (int) $rsk->kode_kelurahan,
                            'latitude' => $rsk->latitude,
                            'longitude' => $rsk->longitude,
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
