<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    protected $fillable = [
        'vistor_id','id', 
    ];


    function vistor(){


        return $this->belongsTo('App\Vistor');
    }


    function symptoms(){

        return $this->hasMany('App\Symptom');
      }

      function travel_histories(){

        return $this->hasMany('App\Travel_history');
      }

      function contact_histories(){

        return $this->hasMany('App\Contact_history');
      }


      function details(){

        return $this->hasMany(Details::class);
      }
}
