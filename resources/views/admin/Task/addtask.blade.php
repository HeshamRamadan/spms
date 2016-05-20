@extends('layouts.master')

@section('title')
   SPMS | Add New Task
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'projects'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
<h1>Add New Task</h1>
	
	 <div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New Task</h3></div>
            <div class="panel-body">
            
            <form action="{{ route('addnewtask',['release_id' => $release->id]) }}" method="post" id="newtask">
                <label for="title">Title</label>
                <div class="form-group {{ $errors->has('title')?'has-error':'' }}">
                    
                    <input class="form-control" type="text" id="title" name="title" required  autofocus >
                  @if ($errors->has('title'))
                       <span class="help-block">
                          <strong>{{ $errors->first('title') }}</strong>
                       </span>
                 @endif
                </div> 
                
                <label for="desc">Description</label>
                <div class="form-group {{ $errors->has('desc')?'has-error':'' }}">
                    
                    <textarea class="form-control" id="desc" name="desc" value="{{ old('desc') }}" ></textarea>
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
					    @foreach($developers as $developer)
					   		 <option value="{{$developer->id}}">{{$developer->user->name}}</option>
					    @endforeach
					    
				  	</select>
				 @if ($errors->has('developer'))
                       <span class="help-block">
                          <strong>{{ $errors->first('developer') }}</strong>
                       </span>
                 @endif 
				  	     
                </div>
               	 
                <div class="form-group {{ $errors->has('status')?'has-error':'' }}">
                    <label for="name">Status</label>
                    <input class="form-control" type="text" id="status" name="status" >
                 	@if ($errors->has('status'))
                       <span class="help-block">
                          <strong>{{ $errors->first('status') }}</strong>
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

               