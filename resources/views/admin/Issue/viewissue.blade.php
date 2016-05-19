@extends('layouts.master')

@section('title')
   SPMS | View Issue
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewissue'] )
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>View Issue</h1><br>
	
	 <div class="row">
	        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
	           <div class="panel panel-primary reg-panal"  >
	           <div class="panel-heading"><h3 style="color: white; ">Find Issue</h3></div>
	            <div class="panel-body">
	                 <label>Enter your Issue id</label>
	                   
	       			 <form  role="search" method="post" action="{{ route('issuedata') }}">
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
           <div class="panel-heading"><h3 style="color: white; ">View All Issues</h3></div>
           <div class="panel-body">
				 <table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
					    <thead style="background-color:#DEF0DA; color:#009425;">
					      <tr>
					        <th>Issue Id</th>
					        <th>Issue Description</th>
					        <th>Created By</th>
					        <th>Assigned To</th>
					        <th>Project Name</th>
					        <th>Created At</th>
					        
					        
					      
					      </tr>
					    </thead>
					    <tbody>
					    @foreach ($issues as $issue)
					      <tr>
					     	<td>{{$issue->id}}</td>
					     	<td>{{$issue->desc}}</td>
					        <td>{{$issue->user->name}}</td>
					       	<td>{{$issue->developer->user->name}}</td>
					       	<td>{{$issue->release->project->name}}</td>
					       <td>{{$issue->created_at}}</td>
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
