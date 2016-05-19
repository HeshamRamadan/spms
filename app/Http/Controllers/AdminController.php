<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Developer;
use App\Manager;
use App\Tester;
use App\Task;
use App\Release;

class AdminController extends Controller
{
	
	public function postSignUp(Request $request)
		{
			//validations
			$this->validate($request, [
	            'name' => 'required|max:100',
				'email' => 'required|email|unique:users',
				'passwd' => 'required|min:4',
				'job_type' => 'required',
				'phone' => 'required',	
				
	        ]);
			//taking variable data from request
	
			$name     = $request['name'];
			$email    = $request['email'];
			$password = bcrypt($request['passwd']);
			$job_type = $request['job_type'];
			$phone 	  = $request['phone'];
			$xp		  = $request['manager_experiances'];
			$prog_lang = $request['prog_lang'];
			$tester_experiances = $request['tester_experiances'];
			
			//saveing into database
			
			$user = New User;
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
					$developer->prog_langs = $prog_lang;
					$developer->save();
					break;
				case 4:
					$tester		 = new Tester;
					$tester->user_id = $user->id;
					$tester->years_xp = $tester_experiances;
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
			$users = User::all();
			return view('admin/User/edituser',['users' => $users]);
		}
		
		public function getAddProject()
		{
			$user = User::all();
			return view('admin/Project/addnewproject' , ['users' => $user]);
		}
		
		public function getViewProject()
		{
			$projects = Project::all();
			return view('admin/Project/viewproject' , ['projects' => $projects]);
		}
		
		public function getProjectData(Request $request)
		{
			
			$value = $request['search'];
			
			$project = Project::where('name', $value)->first();
			if(! $project){
				return redirect()->back(); 
			}
			return view('admin/Project/project-data' , ['project' => $project]);
			
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
			$tasks = Task::all();
			return view('admin/Task/viewtask' , ['tasks' => $tasks]);
		
		}
		
		public function getTaskdata(Request $request)
		{
				
			$value = $request['search'];
				
			$task = Task::where('id', $value)->first();
			if(! $task){
				return redirect()->back();
			}
			return view('admin/Task/task-data' , ['task' => $task]);
				
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
			$issues = Issue::all();
			
			
			return view('admin/Issue/viewissue', ['issues' => $issues ]);
		
		}
		
			
		public function getIssueData(Request $request)
		{
		
			$value = $request['search'];
		
			$issue = Issue::where('id', $value)->first();
			if(! $issue){
				return redirect()->back();
			}
			return view('admin/Issue/issue-data' , ['issue' => $issue]);
		
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
