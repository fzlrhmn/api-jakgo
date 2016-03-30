<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BalitowerCctvModel extends Model
{
    protected $table = 'app_poi_cctv_balitower';
    protected $primaryKey = 'cctv_id';
    public $timestamps = false;
    protected $hidden = ['url','rtmp','hds',''];
}
