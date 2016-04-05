<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use PhpParser\Node\Expr\Cast\Array_;
use PhpParser\Node\Expr\Cast\Object_;

class GeoKecamatanController extends Controller
{

    /**
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getKecamatan() {

        # query with selected columns from getColumns
        $resultKecamatan = DB::table('geo_kecamatan')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->get();

        # return with generateResult() function
        return $this->generateResult($resultKecamatan);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getKecamatanById ( $id ) {

        # query with selected columns from getColumns
        $resultKecamatan = DB::table('geo_kecamatan')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->whereIn('kode_kecamatan',explode(',',$id))
            ->get();

        # return with generateResult() function
        return $this->generateResult($resultKecamatan);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getKecamatanByKodeKota ( $id ) {

        # query with selected columns from getColumns
        $resultKecamatan = DB::table('geo_kecamatan')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->where('kode_kota',$id)
            ->get();

        # return with generateResult() function
        return $this->generateResult($resultKecamatan);
    }

    /**
     * @param $resultKecamatan
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultKecamatan ) {

        # if parameter format exist and format equal geojson then transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultKecamatan)
                ->transformWith(function($kota) {
                    return [
                        'kode_provinsi' => (int) $kota->kode_provinsi,
                        'nama_provinsi' => $kota->nama_provinsi,
                        'kode_kota' => (int) $kota->kode_kota,
                        'nama_kota' => $kota->nama_kota,
                        'kode_kecamatan' => (int) $kota->kode_kecamatan,
                        'nama_kecamatan' => $kota->nama_kecamatan,
                        'shape' => $kota->geometry,
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
                ->collection($resultKecamatan)
                ->transformWith(function($kota) {
                    if ( \Request::has('shape') && \Request::input('shape') == 'true' ) {
                        return [
                            'kode_provinsi' => (int) $kota->kode_provinsi,
                            'nama_provinsi' => $kota->nama_provinsi,
                            'kode_kota' => (int) $kota->kode_kota,
                            'nama_kota' => $kota->nama_kota,
                            'kode_kecamatan' => (int) $kota->kode_kecamatan,
                            'nama_kecamatan' => $kota->nama_kecamatan,
                            'geometry' => $kota->geometry_text,
                        ];
                    }else{
                        return [
                            'kode_provinsi' => (int) $kota->kode_provinsi,
                            'nama_provinsi' => $kota->nama_provinsi,
                            'kode_kota' => (int) $kota->kode_kota,
                            'nama_kota' => $kota->nama_kota,
                            'kode_kecamatan' => (int) $kota->kode_kecamatan,
                            'nama_kecamatan' => $kota->nama_kecamatan,
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
            'kode_provinsi',
            'kode_kota',
            'kode_kecamatan',
            'nama_provinsi',
            'nama_kota',
            'nama_kecamatan'
        ];
    }
 }
