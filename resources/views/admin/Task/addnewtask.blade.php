@extends('layouts.master')

@section('title')
   SPMS | Add New Task
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'addtask'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
<h1>Add New Task</h1>
	
	 <div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New Task</h3></div>
            <div class="panel-body">
            
            <form action="{{ route('addtask') }}" method="post" id="newtask">
                <div class="form-group {{ $errors->has('title')?'has-error':'' }}">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title" >
                  @if ($errors->has('title'))
                       <span class="help-block">
                          <strong>{{ $errors->first('title') }}</strong>
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
                
                
                
                <div class="form-group {{ $errors->has('developer')?'has-error':'' }}">
                    <label for="developer">Developer</label><br>	  
				   <select name="developer" class="form-control">
				   		<option value="" selected ></option>	
					    @foreach($users as $user)
					   		 <option value="{{$user->job_type}}">{{$user->name}}</option>
					    @endforeach
					    
				  	</select>
				 @if ($errors->has('developer'))
                       <span class="help-block">
                          <strong>{{ $errors->first('developer') }}</strong>
                       </span>
                 @endif 
				  	     
                </div>
               	<div class="form-group {{ $errors->has('release')?'has-error':'' }}">
                    <label for="release">Release</label><br>	  
				   <select name="release" class="form-control">
				   		<option value="" selected ></option>
				   		@foreach($users as $user)
					   		 <option value="{{$user->job_type}}">{{$user->name}}</option>
					    @endforeach
				  	</select>
				 @if ($errors->has('release'))
                       <span class="help-block">
                          <strong>{{ $errors->first('release') }}</strong>
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

               