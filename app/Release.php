<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
 	public function project(){
    	return $this->belongsTo('App\Project');
    }
    public function tasks(){
    	return $this->hasMany('App\Task');
    }
    public function issues(){
    	return $this->hasMany('App\Issue');
    }
    
}
