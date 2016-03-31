<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use League\Fractal\Pagination;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class KebersihanTps extends Controller
{
    /**
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getTps() {

        # query with selected columns from getColumns
        $resultTps= DB::table('kebersihan_tps')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->paginate(200);

        # return with generateResult() function
        return $this->generateResult($resultTps);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getTpsById ( $id ) {

        # query with selected columns from getColumns
        $resultTps = DB::table('kebersihan_tps')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->whereIn('id',explode(",",$id))
            ->get();

        # return with generateResult() function
        return $this->generateResultWithoutPaging($resultTps);
    }

    /**
     * @param $resultTps
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultTps ) {

        # if parameter format exist and format equal geojson then transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultTps)
                ->transformWith(function($tps) {
                    return [
                        'id' => (int) $tps->id,
                        'nama_tps' => $tps->nama_tps,
                        'kode_kota' => (int) $tps->kode_kota,
                        'kode_kecamatan' => $tps->kode_kecamatan,
                        'kode_kelurahan' => (int) $tps->kode_kelurahan,
                        'location' => [
                            'alamat' => (int) $tps->nama_jalan,
                            'latitude' => (int) $tps->latitude,
                            'longitude' => (int) $tps->longitude,
                        ],
                        'shape' => $tps->geometry,
                    ];
                })
                ->paginateWith(new IlluminatePaginatorAdapter($resultTps))
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
                $feature = array(
                    'type' => 'Feature',
                    'properties' => $properties,
                    'geometry' => json_decode($data['shape'])
                );

                # Add feature arrays to feature collection array
                array_push($geojson['features'], $feature);
            }

            # add metadata of pagination
            $geojson['meta'] = $transform['meta'];

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
                ->collection($resultTps)
                ->transformWith(function($tps) {
                    if ( \Request::has('shape') && \Request::input('shape') == true ) {
                        return [
                            'id' => (int) $tps->id,
                            'nama_tps' => $tps->nama_tps,
                            'kode_kota' => (int) $tps->kode_kota,
                            'kode_kecamatan' => $tps->kode_kecamatan,
                            'kode_kelurahan' => (int) $tps->kode_kelurahan,
                            'location' => [
                                'alamat' => (int) $tps->nama_jalan,
                                'latitude' => (int) $tps->latitude,
                                'longitude' => (int) $tps->longitude,
                            ],
                            'geometry' => $tps->geometry_text,
                        ];
                    }else{
                        return [
                            'id' => (int) $tps->id,
                            'nama_tps' => $tps->nama_tps,
                            'kode_kota' => (int) $tps->kode_kota,
                            'kode_kecamatan' => $tps->kode_kecamatan,
                            'kode_kelurahan' => (int) $tps->kode_kelurahan,
                            'location' => [
                                'alamat' => (int) $tps->nama_jalan,
                                'latitude' => (int) $tps->latitude,
                                'longitude' => (int) $tps->longitude,
                            ],
                        ];
                    }
                })
                ->paginateWith(new IlluminatePaginatorAdapter($resultTps))
                ->toArray();

            # Create array of final response
            $result = $transform;
        }

        # return result
        return $result;
    }

    /**
     * @param $resultTps
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResultWithoutPaging( $resultTps ) {

        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            $result = null;

            $transform = fractal()
                ->collection($resultTps)
                ->transformWith(function($tps) {
                    return [
                        'id' => (int) $tps->id,
                        'nama_tps' => $tps->nama_tps,
                        'kode_kota' => (int) $tps->kode_kota,
                        'kode_kecamatan' => $tps->kode_kecamatan,
                        'kode_kelurahan' => (int) $tps->kode_kelurahan,
                        'location' => [
                            'alamat' => (int) $tps->nama_jalan,
                            'latitude' => (int) $tps->latitude,
                            'longitude' => (int) $tps->longitude,
                        ],
                        'shape' => $tps->geometry,
                    ];
                })
                ->toArray();

            $geojson = ['type' => 'FeatureCollection', 'features' => array() ];

            foreach ($transform['data'] as $data) {
                $properties = $data;

                unset($properties['shape']);
                unset($properties['geometry_text']);
                $feature = array(
                    'type' => 'Feature',
                    'properties' => $properties,
                    'geometry' => json_decode($data['shape'])
                );

                # Add feature arrays to feature collection array
                array_push($geojson['features'], $feature);
            }

            $result = $geojson;

        }
        elseif(\Request::has('format') && \Request::input('format') != 'geojson'){
            $result = response()->json(["errors" => ["message" => "Parameter unknown", "code" => 200]], 200);
        }
        else{

            $transform = fractal()
                ->collection($resultTps)
                ->transformWith(function($tps) {
                    if ( \Request::has('shape') && \Request::input('shape') == true ) {
                        return [
                            'id' => (int) $tps->id,
                            'nama_tps' => $tps->nama_tps,
                            'kode_kota' => (int) $tps->kode_kota,
                            'kode_kecamatan' => $tps->kode_kecamatan,
                            'kode_kelurahan' => (int) $tps->kode_kelurahan,
                            'location' => [
                                'alamat' => (int) $tps->nama_jalan,
                                'latitude' => (int) $tps->latitude,
                                'longitude' => (int) $tps->longitude,
                            ],
                            'geometry' => $tps->geometry_text,
                        ];
                    }else{
                        return [
                            'id' => (int) $tps->id,
                            'nama_tps' => $tps->nama_tps,
                            'kode_kota' => (int) $tps->kode_kota,
                            'kode_kecamatan' => $tps->kode_kecamatan,
                            'kode_kelurahan' => (int) $tps->kode_kelurahan,
                            'location' => [
                                'alamat' => (int) $tps->nama_jalan,
                                'latitude' => (int) $tps->latitude,
                                'longitude' => (int) $tps->longitude,
                            ],
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
            'nama_tps',
            'nama_jalan',
            'latitude',
            'longitude',
            'kode_kota',
            'kode_kecamatan',
            'kode_kelurahan'
        ];
    }
}
