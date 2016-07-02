<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    protected $fillable = [
        'name'
    ];

    public function diseases(){
        return $this->belongsToMany('App\Disease')->withPivot('cf_score')->withTimestamps();
    }

    public function checks(){
        return $this->belongsToMany('App\Check')->withTimestamps();
    }
}
