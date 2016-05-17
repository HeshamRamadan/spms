@extends('layouts.master')

@section('title')
   SPMS | Daily Reports
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'dailyreports'] )
	
<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>Daily Reports</h1>
	

</div>
	

@endsection
