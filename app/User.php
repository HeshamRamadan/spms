<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User  extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
    	use \Illuminate\Auth\Authenticatable;
    	public function manager(){
    		return $this->hasMany('App\Manager');
    	}
    	public function developer(){
    		return $this->hasMany('App\Developer');
    	}
    	public function tester(){
    		return $this->hasMany('App\Tester');
    	}
    	*/
    use \Illuminate\Auth\Authenticatable;
   public function mangers(){
   	return $this->hasMany('App\Manager');
   }
   public function developers(){
   	return $this->hasMany('App\Developer');
   }
   public function testers(){
   	return $this->hasMany('App\Tester');
   }
   public function issues(){
   	return $this->hasMany('App\Issue');
   }
   
   
}
