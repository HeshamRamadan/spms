@extends('layouts.master')

@section('title')
   SPMS | {{ Auth::user()->name }}
@endsection

@section('menu')
		<li class="active"><a href="{{route('dashboard')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Dashboard</a></li>
		<li><a href="widgets.html"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>bla bla bla</a></li>
	
		<li role="presentation" class="divider"></li>
		
@endsection

@section('content')

@include('includes/header')
@include('includes/sidebar')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<h1>Project Manager</h1>
	

</div>
@endsection
