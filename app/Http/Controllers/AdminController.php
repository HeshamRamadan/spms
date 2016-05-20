<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Developer;
use App\Manager;
use App\Tester;
use App\Diagrame;
use App\Methodology;
use App\Release;
use App\Task;
use App\Issue;

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
		
		//get the view form to ecit user
		public function getEditUserId($id)
		{
			$user = User::find($id);
			if($user->job_type!=1){
				switch ($user->job_type) {
					case 2:
						$manager = Manager::where('user_id', $user->id)->first();
						return view('admin/User/adjustuser',['user' => $user],['manager'=>$manager]);
						break;
					case 3:
						$developer = Developer::where('user_id', $user->id)->first();
						return view('admin/User/adjustuser',['user' => $user,['developer'=>$developer]]);
						break;
					case 4:
						$tester = Tester::where('user_id', $user->id)->first();
						return view('admin/User/adjustuser',['user' => $user],['tester'=>$tester]);
						break;
							
				}
			}else{
				return view('admin/User/adjustuser',['user' => $user]);
		
			}
		
		}
		
		//save user data after sumit the changes
		public function postSaveUser(Request $request, $user_id)
		{
			$user = User::find($user_id);
			$user->name = $request['name'];
			$user->email = $request['email'];
			$user->password = bcrypt($request['passwd']);
			$user->phone = $request['phone'];
			$xp		  = $request['manager_experiances'];
			$prog_lang = $request['prog_lang'];
			$tester_experiances = $request['tester_experiances'];
		
			if ($user->job_type != $request['job_type']){
		
				//delete his old postion
				switch ($user->job_type) {
					case 2:
						$manager = Manager::where('user_id', $user->id)->first();
						$manager->delete();
						break;
					case 3:
						$developer = Developer::where('user_id', $user->id)->first();
						$user->developer->delete();
						break;
					case 4:
						$tester = Tester::where('user_id', $user->id)->first();
						$tester->delete();
						break;
							
				}
				//change job_type
				$user->job_type = $request['job_type'];
				$user->update();
				//add to the right table
				switch ($user->job_type) {
					case 2:
						$manager = new Manager;
						$manager->user_id = $user->id;
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
		
			}else{
				switch ($user->job_type) {
					case 2:
						$manager = Manager::where('user_id', $user->id)->first();
						$manager->xp_id 	= $xp;
						$manager->update();
						break;
					case 3:
						$developer = Developer::where('user_id', $user->id)->first();
						$developer->prog_langs = $prog_lang;
						$developer->update();
						break;
					case 4:
						$tester = Tester::where('user_id', $user->id)->first();
						$tester->years_xp = $tester_experiances;
						$tester->update();
						break;
							
				}
				$user->update();
			}
		
		
		
			return redirect()->route('edituser');
		}
		
		
		//------------------------------
		public function getAddProject()
		{	
			$managers = Manager::all();
			return view('admin/Project/addnewproject' , ['managers' => $managers]);
		}
		public function postNewProject(Request $request)
		
		{
			
					$name				= $request['name'];
					$desc				= $request['desc'];
					$requirements		= $request['requirements'];
					$deadline			= $request['deadline'];
					$manager_id			= $request['project_manager'];
					$method				= $request['method'];
					$diagrame_name		= $request['diagrame_name'];
					$file				= $request->file('image');
					$filename			= $request['name']. '-' . $diagrame_name . 'jpg' ;
				
					$project = new Project;
					$project->name = $name;
					$project->desc = $desc;
					$project->requirements = $requirements;
					$project->dead_line = $deadline;
					$project->manager_id = $manager_id;
					$project->save();
					$methodology = new  Methodology;
					$methodology->name = $method;
					$methodology->project_id = $project->id ;
					$methodology->save();
					$diagrame = new Diagrame;
					$diagrame->name = $diagrame_name;
					$diagrame->methodology_id = $methodology->id;
					$diagrame->save();
					if($file){
						Storage::disk('local')->put($filename,File::get($file));
					
					}else return redirect()->route('viewproject')->with(['message' => 'Added new project successfuly !' ]);;
					
					
			return redirect()->route('dashboard');		
			
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
		public function getProject($pid)
		{
				
			$value = $pid;
				
			$project = Project::where('id', $value)->first();
			if(! $project){
				return redirect()->back();
			}
			return view('admin/Project/project-data' , ['project' => $project]);
				
		}
		public function getEditProject()
		{
			return view('admin/Project/editproject');
		}

		public function getDeleteProject($project_id)
		{
			$project = Project::where('id', $project_id)->first();    	
    	$project->delete();
		
			return redirect()->back()->with(['message' => 'Project Deleted Successfully' ] );
	
		}
		
		public function getAddRelease($project_id){
		
			$project = Project::find($project_id);
			
		
			return view('Admin/Project/addrelease' , ['project' => $project ]);
		}
		
		public function postAddrelease(Request $request , $project_id)
		{
			$desc = $request['desc'];
			$features = $request['features'];
			$status = $request['status'];
			
			$r_state = Release::where('project_id', '=' , $project_id)->max('rel_number');
				
				
				
			$release = new Release;
			$release->desc = $desc;
			$release->features = $features;
			$release->status = $status;
			$release->project_id = $project_id;
			$release->rel_number = $r_state+1;
			$release->save();
			 
			
			return redirect()->route('getproject' , ['pid' =>  $project_id])->with(['message' => 'Added new release successfuly !' ]);;
				
		}
		
		public function getViewRelease($release_id)
		{
			$release = Release::find($release_id);
			return view('Admin/Project/viewrelease' , ['release' => $release]);
		
		}
		
		public function getDeleteRelease($release_id){
		
			
			$release = Release::find($release_id);
			$project_id = $release->project_id;
			$release->delete();
		
			return redirect()->route('getproject' , ['pid' =>  $project_id])->with(['message' => 'Release Deleted Successfully' ] );
		}
		
		public function getAddTask($release_id)
		{
			$release = Release::find($release_id);	
			$developers = Developer::all();
		
			return view('Admin/Task/addtask' , ['release' => $release , 'developers' => $developers ]);
		}
		

		public function postAddTask(Request $request , $release_id)
		{
			$title = $request['title'];
			$desc = $request['desc'];
			$developer = $request['developer'];
			$status = $request['status'];
			
			$r_state = Task::where('release_id', '=' , $release_id)->max('task_number');
		
		
		
			$task = new Task;
			$task->title = $title;
			$task->desc = $desc;
			$task->developer_id = $developer;
			$task->status = $status;
			$task->release_id = $release_id;
			$task->task_number = $r_state+1;
			$task->save();
		
				
			return redirect()->route('viewrelease' , ['release_id' =>  $release_id])->with(['message' => 'Added new task successfuly !' ]);;
		
		}
		
		public function getViewTask($task_id)
		{	
			$task = Task::find($task_id);
			return view('Admin/Task/viewtask' , ['task' => $task]);
		
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
		
		public function getDeleteTask($task_id)
		{
		
			$task = Task::find($task_id);
			$release_id = $task->release_id;
			$task->delete();
		
			return redirect()->route('viewrelease' , ['release_id' =>  $release_id])->with(['message' => 'Task Deleted Successfully' ] );
	
		}
		
		public function getAddIssue($release_id){
		
			$release = Release::find($release_id);
			$developers = Developer::all();
			$testers = Tester::all();
		
			return view('admin/Issue/addissue' , ['release' => $release, 'developers' => $developers, 'testers' => $testers ]);
		}
		
		public function postAddIssue(Request $request , $release_id)
		{
			$desc = $request['desc'];
			$developer = $request['developer'];
			$tester = $request['tester'];
			
			$progress = $request['progress'];
			
			$r_state = Issue::where('release_id', '=' , $release_id)->max('issue_number');
			
		
			$issue = new Issue;
			$issue->desc = $desc;
			$issue->user_id = Auth::user()->id;
			$issue->developer_id = $developer;
			$issue->tester_id = $tester;
			
			$issue->progress = $progress;
			$issue->release_id = $release_id;
			$issue->issue_number = $r_state+1;
			$issue->save();
		
							
			return redirect()->route('viewrelease' , ['release_id' =>  $release_id])->with(['message' => 'Added new issue successfuly !' ]);;
		
		}
		
		
		
		public function getAssignIssue()
		{
			return view('admin/Issue/assignissue');
		}
		
		public function getViewIssue($issue_id)
		{
			$issue = Issue::find($issue_id);
			$id = $issue->user_id;
			$owner= User::find($id);
			return view('Admin/Issue/viewissue' , ['issue' => $issue , 'owner' => $owner]);
		
		}
		
			
		
		public function getEditIssue()
		{
			return view('admin/Issue/editissue');
		}
		
		public function getDeleteIssue($issue_id)
		{
			
			$issue = Issue::find($issue_id);
			$release_id = $issue->release_id;
			$issue->delete();
		
			return redirect()->route('viewrelease' , ['release_id' =>  $release_id])->with(['message' => 'issue Deleted Successfully' ] );
	
		}
	
		public function getDailyReports()
		{
			return view('admin/DailyReports/dailyreports');
		}
}
