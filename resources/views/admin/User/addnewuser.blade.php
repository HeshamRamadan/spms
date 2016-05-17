@extends('layouts.master')

@section('title')
   SPMS | Add New Users
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'addnewuser'] )
@include('includes/message-block')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>Add New Users</h1>
	
	 <div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New User</h3></div>
            <div class="panel-body">
            
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" >
                  @if ($errors->has('name'))
                       <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                       </span>
                 @endif
                </div>
                <div class="form-group {{ $errors->has('email')?'has-error':'' }}">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="text" id="email" name="email" value="" >
                  @if ($errors->has('email'))
                       <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                       </span>
                 @endif                
                </div>
                <div class="form-group {{ $errors->has('passwd')?'has-error':'' }}">
                    <label for="passwd">Password</label>
                    <input class="form-control" type="password" id="passwd" name="passwd" >
                  @if ($errors->has('passwd'))
                       <span class="help-block">
                          <strong>{{ $errors->first('passwd') }}</strong>
                       </span>
                 @endif               
                </div>
                <div class="form-group {{ $errors->has('job_type')?'has-error':'' }}">
                    <label for="job_type">Job Type</label><br>	  
				   <select name="job_type" class="form-control">
				   		<option value="" selected ></option>	
					    <option value="1">Admin</option>
					    <option value="2">Project Manager</option>
					    <option value="3">Developer</option>
					    <option value="4">tester</option>
				  	</select>
				 @if ($errors->has('job_type'))
                       <span class="help-block">
                          <strong>{{ $errors->first('job_type') }}</strong>
                       </span>
                 @endif 
				  	     
                </div>
                <div class="form-group {{ $errors->has('phone')?'has-error':'' }}">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="text" id="phone" name="phone" >
				 @if ($errors->has('phone'))
                       <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                       </span>
                 @endif                 
                </div>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <button type="submit" class="btn btn-primary">Submit</button>
                 
            </form>
            </div>
            </div>
        </div> 
    </div>
	

</div>

@endsection

               