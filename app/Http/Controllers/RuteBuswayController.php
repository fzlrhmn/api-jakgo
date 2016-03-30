<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class RuteBuswayController extends Controller
{
    public function getRuteBusway() {

        $columnArray = [
            'id',
            'nama_halte',
            'jurusan',
            'koridor',
            DB::raw('ST_ASGEOJSON(ST_GEOMFROMTEXT(geomtex)) as shape')
        ];

        $data = DB::table('app_poi_rutebusway')
                        ->select($columnArray)
                        ->get();

        $routeFinalData = fractal()
                            ->collection($data)
                            ->transformWith(function ($route) {
                                return [
                                    '_id' => $route->id,
                                    'nama_halte' => $route->nama_halte,
                                    'jurusan' => $route->jurusan,
                                    'koridor' => $route->koridor,
                                    'shape' => $route->shape
                                ];
                            })
                            ->toArray();

        # Build GeoJSON feature collection array
        $geojson = array(
            'type'      => 'FeatureCollection',
            'features'  => array()
        );

        foreach ($routeFinalData['data'] as $data) {
            $properties = $data;

            unset($properties['shape']);
            $feature = array(
                'type' => 'Feature',
                'properties' => $properties,
                'geometry' => json_decode($data['shape'])
            );

            # Add feature arrays to feature collection array
            array_push($geojson['features'], $feature);
        }

        return $geojson;

    }
}
