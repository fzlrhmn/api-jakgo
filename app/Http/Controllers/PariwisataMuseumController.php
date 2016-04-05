<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PariwisataMuseumController extends Controller
{
    /**
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getMuseum() {

        # query with selected columns from getColumns
        $resultMuseum = DB::table('pariwisata_museum')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultMuseum);
    }

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    public function getMuseumById( $id ) {

        # query with selected columns from getColumns
        $resultMuseum = DB::table('pariwisata_museum')
            ->select($this->getColumns())
            ->whereIn('id', explode(",",$id))
            ->where('deleted', 0)
            ->get();

        return $this->generateResult($resultMuseum);
    }

    /**
     * @param $resultMuseum
     * @return array|\Illuminate\Http\JsonResponse|null
     */
    private function generateResult( $resultMuseum ) {

        # if parameter format exist and format equal geojson the transform it into geojson array
        if ( \Request::has('format') && \Request::input('format') == 'geojson' ) {

            # init result variable
            $result = null;

            # transform array
            $transform = fractal()
                ->collection($resultMuseum)
                ->transformWith(function($museum) {
                    return [
                        'id' => (int) $museum->id,
                        'nama_museum' => $museum->nama,
                        'alamat' => $museum->alamat,
                        'deskripsi' => $museum->description,
                        'link' => $museum->link,
                        'kode_kota' => (int) $museum->kode_kota,
                        'kode_kecamatan' => (int) $museum->kode_kecamatan,
                        'kode_kelurahan' => (int) $museum->kode_kelurahan,
                        'shape' => $museum->geometry,
                        'latitude' => $museum->latitude,
                        'longitude' => $museum->longitude,
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
                ->collection($resultMuseum)
                ->transformWith(function($museum) {
                    if ( \Request::has('shape') && \Request::input('shape') == 'true' ) {
                        return [
                            'id' => (int) $museum->id,
                            'nama_museum' => $museum->nama,
                            'alamat' => $museum->alamat,
                            'deskripsi' => $museum->description,
                            'link' => $museum->link,
                            'kode_kota' => (int) $museum->kode_kota,
                            'kode_kecamatan' => (int) $museum->kode_kecamatan,
                            'kode_kelurahan' => (int) $museum->kode_kelurahan,
                            'latitude' => $museum->latitude,
                            'longitude' => $museum->longitude,
                            'shape' => $museum->geometry_text,
                        ];
                    }else{
                        return [
                            'id' => (int) $museum->id,
                            'nama_museum' => $museum->nama,
                            'alamat' => $museum->alamat,
                            'deskripsi' => $museum->description,
                            'link' => $museum->link,
                            'kode_kota' => (int) $museum->kode_kota,
                            'kode_kecamatan' => (int) $museum->kode_kecamatan,
                            'kode_kelurahan' => (int) $museum->kode_kelurahan,
                            'latitude' => $museum->latitude,
                            'longitude' => $museum->longitude,
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
            'description',
            'link',
            'latest_update',
            'latitude',
            'longitude',
            'kode_kota',
            'kode_kecamatan',
            'kode_kelurahan'
        ];
    }
}
