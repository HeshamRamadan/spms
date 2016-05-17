<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;




class UserController extends Controller
{
public function getWelcome(){
	if (!Auth::check()){
		return redirect()->route('signinpage');
	}else{
		return redirect()->route('dashboard');
	}
}

public function getSignInPage(){
	return view('welcome');
}
	


	Public function postSignIn(Request $request)
	{	
		
		$this->validate($request, [
			'email' =>'required|email|exists:users,email',
			'password' => 'required'
			]);
		if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'] ]))
		{
			return redirect()->route('dashboard');
		}
		return redirect()->back() ;
	}

	public function getLogout()
	{
		Auth::logout();
		Cache::flush();
		return redirect()->route('signinpage');
	}

	public function getAccount()
	{
		return view('account' , ['user' => Auth::user()]);
	}
	public function postSaveAccount(Request $request)
    {

    }
    
    public function getDashboard(){
    	$type = Auth::user()->job_type;
    	if ($type==1){
    		return view('admin');
    	}
    	else if ($type==2){
    		return view('manager');
    	}
    	else if ($type==3){
    		return view('developer');
    	}
    	else if ($type==4){
    		return view('tester');
    	}
    }
    
    public function error(){
    	return redirect()->route('error');
    }
   
}
