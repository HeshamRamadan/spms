
<!DOCTYPE html>
<html>
    <head>
        <title>SPMS</title>
        <link rel="stylesheet" type="text/css" href="src/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="src/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/main.css')}}">
        
    </head>
    <body>
<div class="container">
		<div class="panel panel-primary log-panal">
            <div class="panel-body">
            <div class="logo">
	<img alt="logo" src="src/img/logo1.png">
</div>
<hr class="hr">
       <form class="form-signin" action="{{ route('signin') }}" method="post">
       	{!! csrf_field() !!}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    
                    <input placeholder="E-mail" class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" autofocus>
                  
                  @if ($errors->has('email'))
                       <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                       </span>
                 @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' :''}}">
                    <input placeholder="Password" class="form-control" type="password" id="password" name="password" value="{{ old('password') }}" >
           
                    @if ($errors->has('password'))
                          <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                          </span>
                 	@endif
                               
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
    
    
    </div>
</div>
</div>

 </body>
    </html>

