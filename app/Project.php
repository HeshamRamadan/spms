<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function manager(){
    	return $this->belongsTo('App\Manager');
    }
    public function releases(){
    	return $this->hasMany('App\Release');
    }
    public function mehtodology(){
    	return $this->hasOne('App\Methodology');
    }
}
