<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mehtodology extends Model
{
    //
	public function project(){
		return $this->belongsTo('App\Project');
	}
	public function diagrames(){
		return $this->hasMany('App\Diagrame');
	}
	
}
