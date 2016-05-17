@extends('layouts.master')

@section('title')
   SPMS | View Task
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewtask'] )
	
<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>View Task</h1>
	

</div>
	

@endsection
