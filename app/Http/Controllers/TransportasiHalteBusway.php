<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use anlutro\cURL\Laravel\cURL;

class TransportasiHalteBusway extends Controller
{
    public function getHalteBusway() {
        $data = cURL::get('http://services.qluein.org/qlue_street/mobile_all_halte_trans.php');
        return response()->json(json_decode($data));
    }
}
