<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function diagnosis(){
        return $this->hasMany('App\Diagnosis');
    }

    public function indications(){
        return $this->belongsToMany('App\Indication')->withTimestamps();
    }
}
