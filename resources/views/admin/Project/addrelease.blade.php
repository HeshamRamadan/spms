@extends('layouts.master')

@section('title')
   SPMS | {{$project->name}}
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'viewproject'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>Add New Release to {{$project->name}} Project</h1>
	
	
	<div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New Project</h3></div>
            <div class="panel-body">
            
            <form action="{{ route('addnewrelease' ,['project_id' => $project->id]) }}" method="post" id="addnewrelease">
          
          <label for="features">Features</label>
                <div class="form-group {{ $errors->has('features')?'has-error':'' }}">
                    
                    <textarea class="form-control" id="features" name="features" value="{{ old('features') }}" ></textarea>
                  @if ($errors->has('features'))
                       <span class="help-block">
                          <strong>{{ $errors->first('features') }}</strong>
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
                
                <button type="submit" class="btn btn-primary">Add New Project</button>
                 
            </form>
            </div>
            </div>
        </div> 
    </div>
	

</div>

@endsection
	