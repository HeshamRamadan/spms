@extends('layouts.master')

@section('title')
   SPMS | View Issue
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewissue'] )
	
<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>View Issue</h1>
	

</div>
	

@endsection
