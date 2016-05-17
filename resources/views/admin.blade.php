
@extends('layouts.master')
@section('title')
   SPMS | {{ Auth::user()->name }}
@endsection



@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'dashboard'])

<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>admin</h1>
	

</div>

@endsection

