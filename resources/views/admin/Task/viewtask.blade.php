@extends('layouts.master')

@section('title')
   SPMS | View Task
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewtask'] )
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>View Task</h1><br>
	
	 <div class="row">
	        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
	           <div class="panel panel-primary reg-panal"  >
	           <div class="panel-heading"><h3 style="color: white; ">Find Task</h3></div>
	            <div class="panel-body">
	                 <label>Enter your task id</label>
	                   
	       			 <form  role="search" method="post" action="{{ route('taskdata') }}">
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
           <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">View All Tasks</h3></div>
           <div class="panel-body">
				 <table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
					    <thead style="background-color:#DEF0DA; color:#009425;">
					      <tr>
					        <th>Task Id</th>
					        <th>Task Title</th>
					        <th>Developer</th>
					        <th>Status</th>
					       
					        
					      
					      </tr>
					    </thead>
					    <tbody>
					    @foreach ($tasks as $task)
					      <tr>
					     	<td>{{$task->id}}</td>
					        <td>{{$task->title}}</td>
					       	<td>{{$task->developer->user->name}}</td>
					       	<td>{{$task->status}}</td>
					       
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
