@extends('layouts.master')

@section('title')
   SPMS | Add New Project
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'addproject'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>Add New Users</h1>
	
	 <div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New Project</h3></div>
            <div class="panel-body">
            
            <form action="{{ route('addproject') }}" method="post" id="newproject">
                <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" >
                  @if ($errors->has('name'))
                       <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                       </span>
                 @endif
                </div>
                <div class="form-group {{ $errors->has('desc')?'has-error':'' }}">
                    <label for="desc">Description</label>
                    <textarea class="form-control" form="desc" id="desc" name="desc" value="" ></textarea>
                  @if ($errors->has('desc'))
                       <span class="help-block">
                          <strong>{{ $errors->first('desc') }}</strong>
                       </span>
                 @endif                
                </div>
                <label for="deadline">DeadLine</label>
                <div class="input-group form-group {{ $errors->has('deadline')?'has-error':'' }} input-append" id="datetimepicker4">                 		
					    <span  class="add-on input-group-addon" style="background-color: white; border:  0px solid white; padding-left: 0px;padding-right: 0px;">
					      <input  class="form-control" name="deadline" id="deadline" data-format="yyyy-MM-dd" type="text" aria-describedby="basic-addon2">
					    </span>
				  @if ($errors->has('deadline'))
                       <span class="help-block">
                          <strong>{{ $errors->first('deadline') }}</strong>
                       </span>
                 @endif               
                </div>
                
                <div class="form-group {{ $errors->has('requirements')?'has-error':'' }}">
                    <label for="requirements">Requirements</label>
                    <textarea class="form-control" form="requirements" id="requirements" name="requirements" value="" ></textarea>
                  @if ($errors->has('requirements'))
                       <span class="help-block">
                          <strong>{{ $errors->first('requirements') }}</strong>
                       </span>
                 @endif                
                </div>
                
                <div class="form-group {{ $errors->has('project_manager')?'has-error':'' }}">
                    <label for="project_manager">Project Manager</label><br>	  
				   <select name="project_manager" class="form-control">
				   		<option value="" selected ></option>	
					    @foreach($users as $user)
					   		 <option value="{{$user->job_type}}">{{$user->name}}</option>
					    @endforeach
					    
				  	</select>
				 @if ($errors->has('project_manager'))
                       <span class="help-block">
                          <strong>{{ $errors->first('project_manager') }}</strong>
                       </span>
                 @endif 
				  	     
                </div>
               	<div class="form-group {{ $errors->has('method')?'has-error':'' }}">
                    <label for="method">method</label><br>	  
				   <select name="method" class="form-control">
				   		<option value="" selected ></option>
				   		@foreach($users as $user)
					   		 <option value="{{$user->job_type}}">{{$user->name}}</option>
					    @endforeach
				  	</select>
				 @if ($errors->has('method'))
                       <span class="help-block">
                          <strong>{{ $errors->first('method') }}</strong>
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

               