<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable = [
        'user_id', 'disease_id', 'cf_total'
    ];

    public function check(){
        return $this->belongsTo('App\Check');
    }

    public function disease(){
        return $this->belongsTo('App\Disease');
    }

    public function indications(){
        return $this->belongsToMany('App\Indication')->withTimestamps();
    }
}
