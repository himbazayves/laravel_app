<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel_history extends Model
{
    protected $fillable = [
        'vistor_id','trial_id', 'country','accompany','living','country','travel_history','id'
    ];


    function vistor(){


        return $this->belongsTo('App\Vistor');
    }



    function trial(){


        return $this->belongsTo('App\Trial');
    }
}
