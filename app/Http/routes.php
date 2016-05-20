<?php

use App\Article;
//fortesting

use App\Manager;
use App\Developer;
use App\Tester;
use App\Project;
use App\Release;
use App\Task;
use App\Issue;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/',[
		'uses'=>'UserController@getDashboard',
		'middleware' => 'auth'
		
]);
Route::get('/signinpage',[
		'uses'=>'UserController@getSignInPage',
		'as'=>'signinpage'

]);


Route::post('/signin',[
		'uses'=>'UserController@postSignIn',
		'as'=>'signin'
		
]);
Route::get('/dashboard',[
		'uses'=>'UserController@getDashboard',
		'as'=> 'dashboard',
		'middleware' => 'auth'
]);


Route::get('/logout', [
		'uses'=>'UserController@getLogout',
		'as'=>'logout',

]);
Route::get('/error', [
		'uses'=>'UserController@error',
		'as'=>'error',

]);


Route::group(['middleware' => ['admin-g']], function () {
	Route::post('/dashboard/signup',[
		'uses'=>'AdminController@postSignUp',
		'as'=>'signup',
		
	]);
	Route::get('/dashboard/reg',[
			'uses'=>'AdminController@getReg',
			'as'=>'reg',
			
	]);
	Route::get('/dashboard/edituser',[
			'uses'=>'AdminController@getEditUser',
			'as'=>'edituser',
	
	]);
	Route::get('/delete-user/{user_id}', [
			'uses' => 'userController@getDeleteUser',
			'as' => 'user.delete',
				
	]);
	//--------------------------------------------------------
	//-- Project
	Route::get('/dashboard/addproject',[
			'uses'=>'AdminController@getAddProject',
			'as'=>'addproject',
	
	]);
	Route::post('/dashboard/newproject',[
			'uses'=>'AdminController@postNewProject',
			'as'=>'newproject',
	
	]);
	Route::get('/dashboard/viewproject',[
			'uses'=>'AdminController@getViewProject',
			'as'=>'viewproject',
	
	]);
	Route::post('/dashboard/projectdata',[
			'uses'=>'AdminController@getProjectData',
			'as'=>'projectdata',
	
	]);
	Route::get('/dashboard/getproject/{pid}',[
			'uses'=>'AdminController@getProject',
			'as'=>'getproject',
	
	]);

	Route::get('/dashboard/editproject',[
			'uses'=>'AdminController@getEditProject',
			'as'=>'editproject',
	]);
	Route::get('/dashboard/deleteproject/{project_id}',[
			'uses'=>'AdminController@getDeleteProject',
			'as'=>'deleteproject',
	]);
	//--------------------------------------------------------
	//-- Release
	Route::get('/dashboard/addrelease/{project_id}',[
			'uses'=>'AdminController@getAddRelease',
			'as'=>'addrelease',
	
	]);
	Route::post('/dashboard/addnewrelease/{project_id}',[
			'uses'=>'AdminController@postAddRelease',
			'as'=>'addnewrelease',
	
	]);
		
	
	Route::get('/dashboard/viewrelease/{release_id}',[
			'uses'=>'AdminController@getViewRelease',
			'as'=>'viewrelease',
	
	]);
	
	Route::post('/dashboard/releasedata',[
			'uses'=>'AdminController@getReleaseData',
			'as'=>'releasedata',
	
	]);
	
	
	Route::get('/dashboard/editrelease',[
			'uses'=>'AdminController@getEditRelease',
			'as'=>'editrelease',
	]);
	
	Route::get('/dashboard/delete-release/{user_id}', [
			'uses' => 'AdminController@getDeleteRelease',
			'as' => 'deleterelease',
	]);
	//--------------------------------------------------------
	//-- Task
	Route::get('/dashboard/addtask/{release_id}',[
			'uses'=>'AdminController@getAddTask',
			'as'=>'addtask',
	
	]);
	
	Route::post('/dashboard/addnewtask/{release_id}',[
			'uses'=>'AdminController@postAddTask',
			'as'=>'addnewtask',
	
	]);
	
	Route::get('/dashboard/viewtask',[
			'uses'=>'AdminController@getViewTask',
			'as'=>'viewtask',
	
	]);
	
	Route::post('/dashboard/taskdata',[
			'uses'=>'AdminController@getTaskData',
			'as'=>'taskdata',
	
	]);
	
	
	Route::get('/dashboard/edittask',[
			'uses'=>'AdminController@getEditTask',
			'as'=>'edittask',
	]);
	Route::get('/dashboard/deletetask/{task_id}',[
			'uses'=>'AdminController@getDeleteTask',
			'as'=>'deletetask',
	]);
	//--------------------------------------------------------
	// -- Issue
	Route::get('/dashboard/addissue',[
			'uses'=>'AdminController@getAddIssue',
			'as'=>'addissue',
	
	]);
	Route::get('/dashboard/assignissue',[
			'uses'=>'AdminController@getAssignIssue',
			'as'=>'assignissue',
	
	]);
	Route::get('/dashboard/viewissue',[
			'uses'=>'AdminController@getViewIssue',
			'as'=>'viewissue',
	
	]);
	Route::post('/dashboard/issuedata',[
			'uses'=>'AdminController@getIssueData',
			'as'=>'issuedata',
	
	]);
	Route::get('/dashboard/editissue',[
			'uses'=>'AdminController@getEditIssue',
			'as'=>'editissue',
	]);
	Route::get('/dashboard/deleteissue',[
			'uses'=>'AdminController@getDeleteIssue',
			'as'=>'deleteissue',
	]);
	Route::get('/dashboard/dailyreports',[
			'uses'=>'AdminController@getDailyReports',
			'as'=>'dailyreports',
	]);
	
	
});



//testing routes
Route::get('/test', function (){

	$issue = Issue::where('release_id', '=' , 1)->max('id');
	return View('/test/articles',['issue' => $issue]);

});

	
Route::get('/profile/{username}',function($username){
	
		$user = User::where('name', $username)->first();
		return View::make('/test/profile')->with('user', $user);

});