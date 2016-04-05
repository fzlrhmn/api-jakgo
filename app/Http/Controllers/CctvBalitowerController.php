<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CctvBalitowerController extends Controller
{
    /**
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getCctvBalitower() {

        # query with selected columns from getColumns
        $resultCctvBalitower = DB::table('app_poi_cctv_balitower')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->get();

        # return with generateResult() function
        return $this->generateResult($resultCctvBalitower);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getCctvBalitowerById( $id ) {

        # query with selected columns from getColumns
        $resultCctvBalitower = DB::table('app_poi_cctv_balitower')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->whereIn('cctv_id', explode(',',$id))
            ->get();

        # return with generateResult() function
        return $this->generateResult($resultCctvBalitower);
    }

    /**
     * @param $resultCctvBalitower
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultCctvBalitower ) {

        # if parameter format exist and format equal geojson then transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultCctvBalitower)
                ->transformWith(function($cctvBalitower) {
                    return [
                        'id' => (int) $cctvBalitower->cctv_id,
                        'id_site' => $cctvBalitower->site_id,
                        'nama_site' => (int) $cctvBalitower->site_name,
                        'url' => $cctvBalitower->url,
                        'location' =>[
                            'latitude' => (float) $cctvBalitower->lat,
                            'longitude' => (float) $cctvBalitower->lng,
                        ],
                        'shape' => $cctvBalitower->geometry,
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
                ->collection($resultCctvBalitower)
                ->transformWith(function($cctvBalitower) {
                    if ( \Request::has('shape') && \Request::input('shape') == 'true' ) {
                        return [
                            'id' => (int) $cctvBalitower->cctv_id,
                            'id_site' => $cctvBalitower->site_id,
                            'nama_site' => (int) $cctvBalitower->site_name,
                            'url' => $cctvBalitower->url,
                            'location' =>[
                                'latitude' => (float) $cctvBalitower->lat,
                                'longitude' => (float) $cctvBalitower->lng,
                            ],
                            'geometry' => $cctvBalitower->geometry_text
                        ];
                    }elseif ( \Request::has('shape') && \Request::input('shape') != 'true' ){
                        return [
                            'id' => (int) $cctvBalitower->cctv_id,
                            'id_site' => $cctvBalitower->site_id,
                            'nama_site' => (int) $cctvBalitower->site_name,
                            'url' => $cctvBalitower->url,
                            'location' =>[
                                'latitude' => (float) $cctvBalitower->lat,
                                'longitude' => (float) $cctvBalitower->lng,
                            ],
                        ];
                    }else{
                        return [
                            'id' => (int) $cctvBalitower->cctv_id,
                            'id_site' => $cctvBalitower->site_id,
                            'nama_site' => (int) $cctvBalitower->site_name,
                            'url' => $cctvBalitower->url,
                            'location' =>[
                                    'latitude' => (float) $cctvBalitower->lat,
                                'longitude' => (float) $cctvBalitower->lng,
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

        # return result
        return $result;
    }

    /**
     * @return array
     */
    private function getColumns() {
        return [
            DB::raw('ST_ASGEOJSON(the_geom) as geometry'),
            DB::raw('ST_ASTEXT(the_geom) as geometry_text'),
            'cctv_id',
            'site_id',
            'site_name',
            'url',
            'lat',
            'lng'
        ];
    }
}
