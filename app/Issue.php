<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function tester(){
		return $this->belongsTo('App\Tester');
	}
	public function developer(){
		return $this->belongsTo('App\Developer');
	}
	public function release(){
		return $this->belongsTo('App\Release');
	}

	
}
