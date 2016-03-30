<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class PariwisataMuseumController extends Controller
{
    public function getMuseum() {

        # query with selected columns from getColumns
        $resultMuseum = DB::table('pariwisata_museum')
            ->select($this->getColumns())
            ->where('deleted', 0)
            ->get();

        return $resultMuseum;
    }

    public function getMuseumById( $id ) {

        # query with selected columns from getColumns
        $resultMuseum = DB::table('pariwisata_museum')
            ->select($this->getColumns())
            ->where('id', $id)
            ->where('deleted', 0)
            ->get();

        return $resultMuseum;
    }

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
