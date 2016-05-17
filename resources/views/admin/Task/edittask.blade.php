@extends('layouts.master')

@section('title')
   SPMS | Edit Task
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'edittask'] )
	
<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>Edit Task</h1>
	

</div>
	

@endsection
