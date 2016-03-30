<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiCctvBitekModel extends Model
{
    protected $table = 'app_poi_cctv_bitek';
    protected $primaryKey = 'CCTV_ID';
    public $timestamps = false;
}
