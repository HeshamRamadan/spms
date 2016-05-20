@extends('layouts.master')

@section('title')
   SPMS | View Task
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewtask'] )
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
	<h1>Task # {{$task->task_number}} [ {{$task->release->project->name}} project ]</h1><br>
	
	 

<div class="row">
			
			
			<div class="col-md-4">	
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Task Number
					</div>
					<div class="panel-body">
						<p> {{$task->task_number}}</p>
					</div>
				</div>
			</div>
			
		
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Task Title
					</div>
					<div class="panel-body panel-body-view">
						<p> {{$task->title}}</p>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Start Date
					</div>
					<div class="panel-body">
						<p>{{$task->created_at}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Status
					</div>
					<div class="panel-body panel-body-view">
						<p>{{$task->status}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Description
					</div>
					<div class="panel-body">
						<p>{{$task->desc}}</p>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Developer
					</div>
					<div class="panel-body">
						<p>{{$task->developer->user->name}}</p>
					</div>
				</div>
			</div>	
				
				
</div>
</div>


			
			
			
		



@endsection
