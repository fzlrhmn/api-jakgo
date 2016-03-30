<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ApiCctvBitekModel;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

use League\Fractal\Resource\Collection as FractalCollection;
use League\Fractal\Manager;

class ApiCctvBitekController extends Controller
{
    /**
     * @param Request $request
     * @param Collection $collection
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCctvBitek(Request $request, Collection $collection) {

        # Get all request
        $request_parameter  = $request->all();

        # Transform it into collection
        $collection         = collect($request_parameter);

        # Filtered it from api_token parameter
        $filtered           = $collection->forget('api_token')->toArray();

        # Get all parameter keys
        $parameter_keys     = array_keys($filtered);

        # Declare error array
        $error              = array();

        # Iterate parameter_keys and check it in table column
        foreach ($parameter_keys as $parameter_key) {
            if(Schema::hasColumn('app_poi_cctv_bitek', $parameter_key)){
                # If column exist, continue
                continue;
            }
            else{
                # If column doesn't exist, push error parameter key into $error array
                array_push($error, $parameter_key);
            }
        }

        # If empty error
        if( empty($error) ) {

            # Query with where condition according to needs from filtered parameter
            $cctvData   = ApiCctvBitekModel::where(function ($query) use ($filtered) {
                        foreach ($filtered as $key => $value) {
                            if($key == 'name'){
                                $query->where($key, 'LIKE', '%'.$value.'%');
                            }
                            else{
                                $query->where($key, $value);
                            }
                        }
                    })->get();


//            foreach ($cctvData as $item) {
//                $newData[]  = $this->transformCctvToJson($item);
//            }


//            return response()->json(["status" => "success","count" => count($newData), "data" => $newData]);

            # Initiate new Manager
            $fractal    = new Manager();

            # Create new transformer object
            $resource   = new FractalCollection($cctvData, function(ApiCctvBitekModel $apiCctvBitekModel) {
                return [
                    'cctv_id'   => (int) $apiCctvBitekModel->CCTV_ID,
                    'cctv_name' => $apiCctvBitekModel->NAME,
                    'url_feed'  => $apiCctvBitekModel->SITE_IP,
                    'location'  => [
                        'address'   => $apiCctvBitekModel->ADDRESS,
                        'latitude'  => (float) $apiCctvBitekModel->LAT,
                        'longitude' => (float) $apiCctvBitekModel->LNG
                    ]
                ];
            });

            # Create the final data into array
            $finalData  = $fractal->createData($resource)->toArray();

            # Create array of final response
            $finalArray = [
                "status" => "success",
                "count" => count($finalData['data']),
                "data"  => $finalData['data']
            ];

            # Return JSON response with success status, count of data, and data itself
            return response()->json($finalArray);

        }else{

            # Transform it into collection
            $error_data = collect($error);

            # Return JSON response with error message, and unknown_parameter
            return response()->json(["errors" => ["code" => 406, "message" => "Unknown Parameter", "unknown_parameter" => $error_data]], 406);
        }
    }


    /**
     * @param ApiCctvBitekModel $cctv
     * @return array
     */
    private function transformCctvToJson( ApiCctvBitekModel $cctv ){
        return [
            'cctv_id'       => (int) $cctv->CCTV_ID,
            'cctv_name'     => $cctv->NAME,
            'address'       => $cctv->ADDRESS,
            'latitude'      => (float) $cctv->LAT,
            'longitude'     => (float) $cctv->LNG,
            'url_feed'      => $cctv->SITE_IP,
        ];
    }
}
