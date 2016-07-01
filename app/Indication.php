<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    protected $fillable = [
        'name'
    ];

    public function diseases(){
        return $this->belongsToMany('App\Disease');
    }

    public function diagnosis(){
        return $this->belongsToMany('App\Diagnosis');
    }
}
