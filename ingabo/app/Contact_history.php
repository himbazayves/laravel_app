<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_history extends Model
{
  protected  $fillable=['vistor_id','trial_id','contact_history'];
    function vistor(){


        return $this->belongsTo(Vistor::class);
    }



    function trial(){


        return $this->belongsTo(Trial::class);
    }
}
