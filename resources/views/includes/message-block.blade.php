
    @if(Session::has('message'))
		<div class="alert alert-success" style="text-align: center">
            {{Session::get('message')}}
    	</div>
    @endif