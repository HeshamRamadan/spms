<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    //
	
    public function  user(){
    	return $this->belongsTo('App\User');
    	
    }
    public function  tasks(){
    	return $this->hasMany('App\Task');
    	 
    }
    public function issues(){
    	return $this->hasMany('App\Issue');
    }
}
