
@extends('layouts.master')

@section('title')
   SPMS | {{$task->title}}
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewtask'] )
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
	<h1>{{$task->title}} task</h1><br>
	
	 

<div class="row">
				
		
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Task Id
					</div>
					<div class="panel-body">
						<p> {{$task->id}}</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Task Title
					</div>
					<div class="panel-body">
						<p> {{$task->title}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Status
					</div>
					<div class="panel-body">
						<p>{{$task->status}}</p>
					</div>
				</div>
			</div>	
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Developer
					</div>
					<div class="panel-body">
						<p>{{$task->developer->user->name}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Project Name
					</div>
					<div class="panel-body">
						<p>{{$task->release->project->name}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Release Id
					</div>
					<div class="panel-body">
						<p>{{$task->release_id}}</p>
					</div>
				</div>
			</div>
			
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						Description
					</div>
					<div class="panel-body">
						<p>{{$task->desc}}</p>
					</div>
				</div>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						Start Date
					</div>
					<div class="panel-body">
						<p>{{$task->created_at}}</p>
					</div>
				</div>
			</div>
			
				<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						End Date
					</div>
					<div class="panel-body">
						<p>{{$task->end_date}}</p>
					</div>
				</div>
			</div>
			
			
			
			
		</div><!-- /.row -->
</div>

	@endsection
	
	