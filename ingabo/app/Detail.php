<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'vistor_id','trial_id', 'name','tel','email'
    ];


    function vistor(){


        return $this->belongsTo(Vistor::class);
    }



    function trial(){


        return $this->belongsTo(Trial::class);
    }
}
