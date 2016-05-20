@extends('layouts.master')

@section('title')
   SPMS | View Issue
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewissue'] )
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
	<h1>Issue # {{$issue->issue_number}} [ {{$issue->release->project->name}} project ]</h1><br>
	
	 

<div class="row">
			
			
			<div class="col-md-4">	
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Issue Number
					</div>
					<div class="panel-body">
						<p> {{$issue->issue_number}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Issue Owner
					</div>
					<div class="panel-body">
						<p>{{$owner->name}}</p>
					</div>
				</div>
			</div>	
			
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Developer
					</div>
					<div class="panel-body">
						<p>{{$issue->developer->user->name}}</p>
					</div>
				</div>
			</div>	
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Tester
					</div>
					<div class="panel-body">
						<p>{{$issue->tester->user->name}}</p>
					</div>
				</div>
			</div>	
			
						
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Start Date
					</div>
					<div class="panel-body">
						<p>{{$issue->created_at}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading panel-heading-view">
						Progress
					</div>
					<div class="panel-body panel-body-view">
						<p>{{$issue->progress}}</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading-view panel-heading">
						Screenshot
					</div>
					<div class="panel-body">
						<p>Screenshot</p>
					</div>
				</div>
			</div>
		
				
				
</div>
</div>


			
			
			
		


@endsection
