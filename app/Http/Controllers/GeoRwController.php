<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use League\Fractal\Pagination;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class GeoRwController extends Controller
{
    /**
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getRw() {

        # query with selected columns from getColumns
        $resultRw= DB::table('geo_rw')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->paginate(200);

        # return with generateResult() function
        return $this->generateResult($resultRw);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getRwById ( $id) {

        # query with selected columns from getColumns
        $resultRw = DB::table('geo_rw')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->whereIn('kode_rw',explode(",",$id))
            ->get();

        # return with generateResult() function
        return $this->generateResultWithoutPaging($resultRw);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getRwByKodeKelurahan ( $id) {

        # query with selected columns from getColumns
        $resultRw = DB::table('geo_rw')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->where('kode_kelurahan',explode(",",$id))
            ->get();

        # return with generateResult() function
        return $this->generateResultWithoutPaging($resultRw);
    }

    /**
     * @param $resultRw
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultRw ) {

        # if parameter format exist and format equal geojson then transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultRw)
                ->transformWith(function($rw) {
                    return [
                        'kode_kota' => (int) $rw->kode_kota,
                        'nama_kota' => $rw->nama_kota,
                        'kode_kecamatan' => (int) $rw->kode_kecamatan,
                        'nama_kecamatan' => $rw->nama_kecamatan,
                        'kode_kelurahan' => (int) $rw->kode_kelurahan,
                        'nama_kelurahan' => $rw->nama_kelurahan,
                        'kode_rw' => (int) $rw->kode_rw,
                        'nama_rw' => $rw->nama_rw,
                        'shape' => $rw->geometry,
                    ];
                })
                ->paginateWith(new IlluminatePaginatorAdapter($resultRw))
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
                ->collection($resultRw)
                ->transformWith(function($rw) {
                    if ( \Request::has('shape') && \Request::input('shape') == true ) {
                        return [
                            'kode_kota' => (int) $rw->kode_kota,
                            'nama_kota' => $rw->nama_kota,
                            'kode_kecamatan' => (int) $rw->kode_kecamatan,
                            'nama_kecamatan' => $rw->nama_kecamatan,
                            'kode_kelurahan' => (int) $rw->kode_kelurahan,
                            'nama_kelurahan' => $rw->nama_kelurahan,
                            'kode_rw' => (int) $rw->kode_rw,
                            'nama_rw' => $rw->nama_rw,
                            'geometry' => $rw->geometry_text,
                        ];
                    }else{
                        return [
                            'kode_kota' => (int) $rw->kode_kota,
                            'nama_kota' => $rw->nama_kota,
                            'kode_kecamatan' => (int) $rw->kode_kecamatan,
                            'nama_kecamatan' => $rw->nama_kecamatan,
                            'kode_kelurahan' => (int) $rw->kode_kelurahan,
                            'nama_kelurahan' => $rw->nama_kelurahan,
                            'kode_rw' => (int) $rw->kode_rw,
                            'nama_rw' => $rw->nama_rw,
                        ];
                    }
                })
                ->paginateWith(new IlluminatePaginatorAdapter($resultRw))
                ->toArray();

            # Create array of final response
            $result = $transform;
        }

        # return result
        return $result;
    }

    /**
     * @param $resultRw
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResultWithoutPaging( $resultRw ) {

        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            $result = null;

            $transform = fractal()
                ->collection($resultRw)
                ->transformWith(function($rw) {
                    return [
                        'kode_kota' => (int) $rw->kode_kota,
                        'nama_kota' => $rw->nama_kota,
                        'kode_kecamatan' => (int) $rw->kode_kecamatan,
                        'nama_kecamatan' => $rw->nama_kecamatan,
                        'kode_kelurahan' => (int) $rw->kode_kelurahan,
                        'nama_kelurahan' => $rw->nama_kelurahan,
                        'kode_rw' => (int) $rw->kode_rw,
                        'nama_rw' => $rw->nama_rw,
                        'shape' => $rw->geometry,
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
                ->collection($resultRw)
                ->transformWith(function($rw) {
                    if ( \Request::has('shape') && \Request::input('shape') == true ) {
                        return [
                            'kode_kota' => (int) $rw->kode_kota,
                            'nama_kota' => $rw->nama_kota,
                            'kode_kecamatan' => (int) $rw->kode_kecamatan,
                            'nama_kecamatan' => $rw->nama_kecamatan,
                            'kode_kelurahan' => (int) $rw->kode_kelurahan,
                            'nama_kelurahan' => $rw->nama_kelurahan,
                            'kode_rw' => (int) $rw->kode_rw,
                            'nama_rw' => $rw->nama_rw,
                            'geometry' => $rw->geometry_text,
                        ];
                    }else{
                        return [
                            'kode_kota' => (int) $rw->kode_kota,
                            'nama_kota' => $rw->nama_kota,
                            'kode_kecamatan' => (int) $rw->kode_kecamatan,
                            'nama_kecamatan' => $rw->nama_kecamatan,
                            'kode_kelurahan' => (int) $rw->kode_kelurahan,
                            'nama_kelurahan' => $rw->nama_kelurahan,
                            'kode_rw' => (int) $rw->kode_rw,
                            'nama_rw' => $rw->nama_rw,
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
            'kode_kota',
            'kode_kecamatan',
            'kode_kelurahan',
            'kode_rw',
            'nama_kota',
            'nama_kecamatan',
            'nama_kelurahan',
            'nama_rw'
        ];
    }
}
