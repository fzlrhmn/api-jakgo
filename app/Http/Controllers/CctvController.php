<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests;

use App\BalitowerCctvModel;
use DB;

class CctvController extends Controller
{
    /**
     *
     */
    public function getBalitowerCctv(Collection $collection, Request $request){
        $data   = BalitowerCctvModel::all([
                                'cctv_id as id',
                                DB::raw('UPPER(site_name) as site'),
                                'lat as latitude',
                                'lng as longitude'
                            ]);
        return response()->json(["status" => "success","count" => count($data), "data" => $data]);
    }

    public function getBalitowerCctvDetail($id)
    {
        $data = BalitowerCctvModel::findOrFail($id, ['cctv_id as id', DB::raw('UPPER(site_name) as site') , 'lat as latitude', 'lng as longitude']);
        return response()->json(["status" => "success", "count" => count($data), "data" => $data]);
    }
}
