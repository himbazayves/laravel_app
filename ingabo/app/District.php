<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'name',
    ];

    function sectors(){

        return $this->hasMany('App\Sector');
      }

      function centers(){

        return $this->hasMany('App\Center');
      }
}
