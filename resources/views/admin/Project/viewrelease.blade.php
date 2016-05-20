
@extends('layouts.master')

@section('title')
   SPMS | release# : {{$release->id}} | {{$release->project->name}} project
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewproject'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
	<h1>release # {{$release->rel_number}} [ {{$release->project->name}} project ]</h1><br>
	
	 

<div class="row">
			
			
			<div class="col-md-4">	
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Release Number
					</div>
					<div class="panel-body">
						<p> {{$release->rel_number}}</p>
					</div>
				</div>
			</div>
			
		
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Release Name
					</div>
					<div class="panel-body panel-body-view">
						<p> {{$release->project->name}}</p>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Start Date
					</div>
					<div class="panel-body">
						<p>{{$release->created_at}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Status
					</div>
					<div class="panel-body panel-body-view">
						<p>{{$release->status}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Description
					</div>
					<div class="panel-body">
						<p>{{$release->desc}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Tasks
					</div>
					<div class="panel-body">
						
						<a href="#"><button  type="button" class="btn btn-primary btn-sm">Add New Task</button></a>								
						<hr>
						<table class="table table-bordered table-striped" style="width: 100%; font-size: 1.5em;">
						    <thead style="background-color:#E0E2E0; color:#009425;">
						      <tr>
						        <th>Task Number</th>
						        <th></th>
						        <th></th>
						        <th></th>
						        
						      
						      </tr>
						    </thead>
						    <tbody>
						    
						     
						      <tr>
						        <td></td>
						       	<td><a href="#"><button  type="button" class="btn btn-primary btn-sm">View</button></a> </td>
						       	 <td><a href="#"><button  type="button" class="btn btn-primary btn-sm">Edit</button></a></td> 
						       	<td><a href="{{route('deleterelease',['release_id' => $release->id])}}"><button  type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
						      </tr>
						      
						    </tbody>
					  </table>
					  
					  
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Requirements
					</div>
					<div class="panel-body">
						<p>{{$release->features}}</p>
					</div>
				</div>
			</div>	
				
				
</div>
</div>


			
			
			
		



	@endsection
	
	