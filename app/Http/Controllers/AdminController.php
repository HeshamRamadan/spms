<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Developer;
use App\Manager;
use App\Tester;

class AdminController extends Controller
{
	
	public function postSignUp(Request $request)
		{
			
			$this->validate($request, [
	            'name' => 'required|max:100',
				'email' => 'required|email|unique:users',
				'passwd' => 'required|min:4',
				'job_type' => 'required',
				'phone' => 'required',	
				
	        ]);
	
	
			$name     = $request['name'];
			$email    = $request['email'];
			$password = bcrypt($request['passwd']);
			$job_type = $request['job_type'];
			$phone 	  = $request['phone'];
			
			$xp		  = $request['xp'];
			$prog_langs = $request['prog_langs'];
			
			
			
			$user            = New user;

			$user->name      = $name;
			$user->email     = $email;
			$user->password  = $password;
			$user->job_type  = $job_type;
			$user->phone  	 = $phone;
			$user->save();
			
			//this is to assign rolls
			switch ($job_type) {
				case 2:
					$manager		 	= new Manager;
					$manager->user_id 	= $user->id;
					$manager->xp_id 	= $xp;
					$manager->save();
					break;
				case 3:
					$developer		 = new Developer;
					$developer->user_id = $user->id;
					
					$developer->save();
					break;
				case 4:
					$tester		 = new Tester;
					$tester->user_id = $user->id;
					
					$tester->save();
					break;
			
			}
			return redirect()->back()->with(['message' => 'Added new user successfuly !' ]);
			
			
		}
		
		public function getReg()
		{			
				return view('admin/User/addnewuser');
		}
		
		public function getEditUser()
		{
			return view('admin/User/edituser');
		}
		
		public function getAddProject()
		{
			$user = User::all();
			return view('admin/Project/addnewproject' , ['users' => $user]);
		}
		
		public function getViewProject()
		{
			return view('admin/Project/viewproject');
		}
		
		public function getEditProject()
		{
			return view('admin/Project/editproject');
		}

		public function getDeleteProject()
		{
			return view('admin/Project/deleteproject');
		}
		public function getAddTask()
		{
			$user = User::all();
			return view('admin/Task/addnewtask' , ['users' => $user]);
		}
		
		public function getViewTask()
		{
			return view('admin/Task/viewtask');
		}
		
		public function getEditTask()
		{
			return view('admin/Task/edittask');
		}
		
		public function getDeleteTask()
		{
			return view('admin/Task/deletetask');
		}
		public function getAddIssue()
		{
			return view('admin/Issue/addissue');
		}
		public function getAssignIssue()
		{
			return view('admin/Issue/assignissue');
		}
		public function getViewIssue()
		{
			return view('admin/Issue/viewissue');
		}
		
		public function getEditIssue()
		{
			return view('admin/Issue/editissue');
		}
		
		public function getDeleteIssue()
		{
			return view('admin/Issue/deleteissue');
		}
	
		public function getDailyReports()
		{
			return view('admin/DailyReports/dailyreports');
		}
}
