<?php

namespace App\Http\Controllers;

use App\Transformer\MusrenbangTransformer;
use DB;
use App\Http\Requests;
use App\MusrenbangModel;
use App\Musrenbang2015Model;
use Illuminate\Support\Facades\Input;
use League\Fractal\Pagination;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class PrototypeMusrenbangController extends Controller
{
    /**
     * Get Musrenbang data with pagination
     * @return JSON
     */
    public function getMusrenbang2014(){

        /** @var Input $token */
        $token = Input::get('api_token');

        /** @var MusrenbangModel $paginator */
        $paginator = MusrenbangModel::paginate(1000);

        /** @var $paginator->GetCollection $dataMusrenbang */
        $dataMusrenbang = $paginator->getCollection();

        return fractal()
            ->collection($dataMusrenbang)
            ->transformWith(new MusrenbangTransformer())
            ->paginateWith(new IlluminatePaginatorAdapter($paginator))
            ->addMeta(['api_token' => $token])
            ->toArray();
    }

    public function getMusrenbang2015(Musrenbang2015Model $musrenbang2015Model) {

        /** @var Input $token */
        $token = Input::get('api_token');

        $input = Input::get();

        $columnArray = [
            'usulanID',
            'kecamatan',
            'kelurahan',
            'masalah',
            DB::raw('st_asgeojson(GEOMFROMTEXT(CONCAT("POINT(",lng, " " ,lat,")"))) as geometry')
        ];

        $paginator = DB::table('app_bappeda_musrenbang2015')
                        ->select($columnArray)
                        ->paginate(10);

        $dataMusrenbang = $paginator->getCollection();

        $finalData = fractal()
                        ->collection($dataMusrenbang)
                        ->transformWith(function ($data) {
                            return [
                                'id' => $data->usulanID,
                                'kecamatan' => $data->kecamatan,
                                'kelurahan' => $data->kelurahan,
                                'masalah' => $data->masalah,
                                'shape' => $data->geometry
                            ];
                        })
                        ->paginateWith(new IlluminatePaginatorAdapter($paginator))
                        ->addMeta(['api_token' => $token])
                        ->toArray();

        # Build GeoJSON feature collection array
        $geojson = array(
            'type'      => 'FeatureCollection',
            'features'  => array()
        );

        foreach ($finalData['data'] as $data) {
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

        $geojson['meta'] = $finalData['meta'];

        return $geojson;
    }
}
