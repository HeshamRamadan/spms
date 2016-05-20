@extends('layouts.master')

@section('title')
   SPMS | Add Issue
@endsection


@section('content')

@include('includes/header')
@include('includes/sidebar' , ['state' => 'addissue'] )

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >
	<h1>Add New Issue to release # {{$release->rel_number}} [ {{$release->project->name}} project ]</h1>
	
	
	<div class="row">
        <div class="col-md-8 " style="margin-left: 3%; margin-top:3%;">
           <div class="panel panel-primary reg-panal"  >
           <div class="panel-heading"><h3 style="color: white; ">New Issue</h3></div>
            <div class="panel-body">
            
            <form action="{{ route('addnewissue' ,['release_id' => $release->id]) }}" method="post" id="addnewissue">
          
	                          
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
	                
	                <div class="form-group {{ $errors->has('tester')?'has-error':'' }}">
                    <label for="tester">Tester</label><br>	  
				   <select name="tester" class="form-control">
				   		<option value="" selected ></option>	
					    @foreach($testers as $tester)
					   		 <option value="{{$tester->id}}">{{$tester->user->name}}</option>
					    @endforeach
					    
					  	</select>
					 @if ($errors->has('tester'))
	                       <span class="help-block">
	                          <strong>{{ $errors->first('tester') }}</strong>
	                       </span>
	                 @endif 
					  	     
	                </div>
	                
	                <div class="form-group {{ $errors->has('progress')?'has-error':'' }}">
	                    <label for="progress">Progress</label>
	                    <input class="form-control" type="text" id="progress" name="progress" >
	                 	@if ($errors->has('progress'))
	                       <span class="help-block">
	                          <strong>{{ $errors->first('progress') }}</strong>
	                       </span>
	                 	@endif
	                </div>
	                
	                <label for="screenshot">Screenshot</label>
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
	                
	                <button type="submit" class="btn btn-primary">Submit</button>
	                 
            </form>
            </div>
            </div>
        </div> 
    </div>
	

</div>


@endsection

               