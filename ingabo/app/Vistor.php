<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vistor extends Model
{
  protected  $fillable=['id','birth','tel','sector','district'];

  function trials(){

    return $this->hasMany('App\Trial');
  }

  function symptoms(){

    return $this->hasMany(Symptom::class);
  }


  function travel_histories(){

    return $this->hasMany(Travel_history::class);
  }

  function details(){

    return $this->hasMany(Details::class);
  }
}
