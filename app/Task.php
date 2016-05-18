<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function developer(){
    	return $this->belongsTo('App\Developer');
    }
    public function release(){
    	return $this->belongsTo('App\Release');
    }
    

    
    
}
