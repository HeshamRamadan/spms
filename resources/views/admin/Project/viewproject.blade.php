@extends('layouts.master')

@section('title')
   SPMS | Projects
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'projects'] )
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>Projects</h1><br>
	
	 <div class="row">
	        <div class="col-md-8 " >
	           <div class="panel panel-primary reg-panal"  >
	           <div class="panel-heading"><h3 style="color: white; ">Find project</h3></div>
	            <div class="panel-body">
	                 <label>Enter your project name</label>
	                   
	       			 <form  role="search" method="post" action="{{ route('projectdata') }}">
				      {!! csrf_field() !!}
				        <div class="form-group">
				          <br><input type="text" class="form-control" id="search" name="search"  placeholder="Search" style="display:inline;" autofocus >
				        </div>
				        
				        <button type="submit" class="btn btn-default">Search</button>
				   <input type="hidden" value="{{ Session::token() }}" name="_token">
				     
				    </form> 				
	           </div>
	        
			</div>
			</div>
		</div>
		
	   <div class="row">
           <div class="col-md-12 ">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">View All Projects</h3></div>
           <div class="panel-body">
				 
				 <a href="{{route('addproject')}}"><button  type="button" class="btn btn-primary btn-sm">Add New Project</button></a>								
						<hr>
				 <table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
					    <thead style="background-color:#DEF0DA; color:#009425;">
					      <tr>
					      
					        <th>Project Name</th>
					        <th>Project Manager</th>
					        <th>Start Date</th>
					        <th>Dead Line</th>
					        <th></th>
					        <th></th>
					        <th></th>
					      
					      </tr>
					    </thead>
					    <tbody>
					    @foreach ($projects as $project)
					     
					      <tr>
					      
					        <td>{{$project->name}}</td>
					       	<td>{{$project->manager->user->name}}</td>
					       	<td>{{$project->created_at}}</td>
					       	<td>{{$project->dead_line}}</td>
					       	<td><a href="{{route('getproject' , ['pid' =>  $project->id])}}"><button  type="button" class="btn btn-primary btn-sm">View</button></a> </td>
						    <td><a href="#"><button  type="button" class="btn btn-primary btn-sm">Edit</button></a></td> 
						    <td><a href="{{route('deleteproject',['project_id' => $project->id])}}"><button  type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
					       	
					      </tr>
					    	@endforeach
					    </tbody>
					  </table>
						</div>	
					
										    
	        </div> 
			</div>
			</div>
		</div>
</div>


	@endsection
