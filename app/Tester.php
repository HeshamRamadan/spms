<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function issues(){
    	return $this->hasMany('App\Issue');
    }
}
