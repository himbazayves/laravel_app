<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = [
        'vistor_id','trial_id', 'symptom'
    ];


    function vistor(){


        return $this->belongsTo(Vistor::class);
    }



    function trial(){


        return $this->belongsTo('App\Trial');
    }
}
