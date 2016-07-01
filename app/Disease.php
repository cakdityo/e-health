<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = [
        'name'
    ];

    public function diagnosis(){
        return $this->hasMany('App\Diagnosis');
    }

    public function indications(){
        return $this->belongsToMany('App\Indication')->withPivot('cf_score')->withTimestamps();
    }
}
