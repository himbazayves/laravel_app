<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable=['name'];
    //

    function district(){


        return $this->belongsTo('App\District');
       
    }
}
