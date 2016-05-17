@extends('layouts.master')

@section('title')
   SPMS | Delete Task
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'deletetask'] )
	
<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>Delete Task</h1>
	

</div>
	

@endsection