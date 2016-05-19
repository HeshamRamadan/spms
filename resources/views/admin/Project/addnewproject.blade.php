@extends('layouts.master')

@section('title')
   SPMS | Add New Project
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'addproject'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>Add New Project</h1>
	
	 <div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New Project</h3></div>
            <div class="panel-body">
            
            <form action="{{ route('newproject') }}" method="post" id="newproject">
                <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ old('newproject') }}">
                  @if ($errors->has('name'))
                       <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                       </span>
                 @endif
                </div>
                <label for="desc">Description</label>
                <div class="form-group {{ $errors->has('desc')?'has-error':'' }}">
                    
                    <textarea class="form-control" id="desc" name="desc"  >{{ old('desc') }}</textarea>
                  @if ($errors->has('desc'))
                       <span class="help-block">
                          <strong>{{ $errors->first('desc') }}</strong>
                       </span>
                 @endif                
                </div>
                <label for="deadline">DeadLine</label>
                <div class="input-group form-group {{ $errors->has('deadline')?'has-error':'' }} input-append" id="datetimepicker4">                 		
					    <span  class="add-on input-group-addon" style="background-color: white; border:  0px solid white; padding-left: 0px;padding-right: 0px;">
					      <input  class="form-control" name="deadline" id="deadline" data-format="yyyy-MM-dd" type="text" aria-describedby="basic-addon2" value="{{ old('email') }}">
					    </span>
				  @if ($errors->has('deadline'))
                       <span class="help-block">
                          <strong>{{ $errors->first('deadline') }}</strong>
                       </span>
                 @endif               
                </div>
                <label for="requirements">Requirements</label>
                <div class="form-group {{ $errors->has('requirements')?'has-error':'' }}">
                    
                    <textarea class="form-control" form="requirements" id="requirements" name="requirements" value="{{ old('email') }}"></textarea>
                  @if ($errors->has('requirements'))
                       <span class="help-block">
                          <strong>{{ $errors->first('requirements') }}</strong>
                       </span>
                 @endif                
                </div>
                <label for="project_manager">Project Manager</label>
                <div class="form-group {{ $errors->has('project_manager')?'has-error':'' }}">
                    	  
				   <select name="project_manager" class="form-control" value="{{ old('email') }}">
				   		<option value="" selected ></option>	
					    @foreach($managers as $manager)
					   		 <option value="{{$manager->id}}">{{$manager->user->name}}</option>
					    @endforeach
					</select>
				 @if ($errors->has('project_manager'))
                       <span class="help-block">
                          <strong>{{ $errors->first('project_manager') }}</strong>
                       </span>
                 @endif 
				  	     
                </div>
                <label for="method">Methodology</label>
               	<div class="form-group {{ $errors->has('mehtod')?'has-error':'' }}">
                    
                    <input class="form-control" type="text" id="method" name="method" value="{{ old('email') }}">
                  @if ($errors->has('method'))
                       <span class="help-block">
                          <strong>{{ $errors->first('method') }}</strong>
                       </span>
                 @endif
                </div>
                
                <!-- Diagrame block -->
                <label for="diagrame_name">Diagrame Name</label>
                <div class="form-group {{ $errors->has('diagrame')?'has-error':'' }}">
                    
                    <input class="form-control" type="text" id="diagrame_name" name="diagrame_name" value="{{ old('email') }}">
                  @if ($errors->has('diagrame_name'))
                       <span class="help-block">
                          <strong>{{ $errors->first('diagrame_name') }}</strong>
                       </span>
                 @endif
                </div>
		  <label for="diagrame">Diagrame Image</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse&hellip; <input type="file" name="image">
                    </span>
                </span>
                <input type="text" class="form-control" readonly >
            </div>
            
            <span class="help-block">
                Please upload JPG image
            </span>
               
                <input type="hidden" value="{{ Session::token() }}" name="_token">
                <button type="submit" class="btn btn-primary">Add New Project</button>
                 
            </form>
            </div>
            </div>
        </div> 
    </div>
	

</div>

@endsection

               