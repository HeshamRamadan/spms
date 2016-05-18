<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagrame extends Model
{
    //
	public function mehtodology(){
		return $this->belongsTo('App\Mehtodology');
	}
    
}
