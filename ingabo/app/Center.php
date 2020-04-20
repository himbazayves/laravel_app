<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable=['name','district_id','contact'];
    //

    function district(){


        return $this->belongsTo('App\District');
       
    }
}
