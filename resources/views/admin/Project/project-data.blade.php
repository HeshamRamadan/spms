
@extends('layouts.master')

@section('title')
   SPMS | {{$project->name}}
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewproject'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
	<h1>{{$project->name}} Project</h1><br>
	
	 

<div class="row">
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Project Id
					</div>
					<div class="panel-body">
						<p> {{$project->id}}</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Project Manager
					</div>
					<div class="panel-body panel-body-view">
						<p> {{$project->manager->user->name}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Start Date
					</div>
					<div class="panel-body">
						<p>{{$project->created_at}}</p>
					</div>
				</div>
			</div>
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Description
					</div>
					<div class="panel-body">
						<p>{{$project->desc}}</p>
					</div>
				</div>
			</div>
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Requirements
					</div>
					<div class="panel-body">
						<p>{{$project->requirements}}</p>
					</div>
				</div>
			</div>
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Releases
					</div>
					<div class="panel-body">
						
						<a href="{{route('addrelease',['project_id' => $project->id])}}"><button  type="button" class="btn btn-primary btn-sm">Add New Release</button></a>								
						<hr>
						<table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
						    <thead style="background-color:#E0E2E0; color:#009425;">
						      <tr>
						        <th>Release Number</th>
						        <th></th>
						        <th></th>
						        <th></th>
						        
						      
						      </tr>
						    </thead>
						    <tbody>
						    
						     @foreach($project->releases as $release)
						      <tr>
						        <td>{{$release->rel_number}}</td>
						       	<td><a href="{{route('viewrelease',['release_id' => $release->id])}}"><button  type="button" class="btn btn-primary btn-sm">View</button></a> </td>
						       	 <td><a href="{{route('editrelease',['release_id' => $release->id])}}"><button  type="button" class="btn btn-primary btn-sm">Edit</button></a></td> 
						       	<td><a href="{{route('deleterelease',['release_id' => $release->id])}}"><button  type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
						      </tr>
						      @endforeach
						    </tbody>
					  </table>
					  
					  
					</div>
				</div>
			</div>
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Issues
					</div>
					<div class="panel-body">
						
						<a href="#"><button  type="button" class="btn btn-primary btn-sm">Add New Issue</button></a>								
						<hr>
						<table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
						    <thead style="background-color:#E0E2E0; color:#009425;">
						      <tr>
						        <th>Issue ID</th>
						        <th></th>
						        <th></th>
						        <th></th>
						        
						      
						      </tr>
						    </thead>
						    <tbody>
						    
						     
						      <tr>
						        <td>||||||||||||||||</td>
						       	<td><a href="#"><button  type="button" class="btn btn-primary btn-sm">View</button></a> </td>
						      	<td><a href="#"><button  type="button" class="btn btn-primary btn-sm">Edit</button></a></td> 
						       	<td><a href="#"><button  type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
						      </tr>
						      
						    </tbody>
					  </table>
					  
					  
					</div>
				</div>
			</div>
				
				<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Dead Line
					</div>
					<div class="panel-body panel-body-view">
						<p>{{$project->dead_line}}</p>
					</div>
				</div>
			</div>
				
			
			
			
		</div><!-- /.row -->
</div>



	@endsection
	
	