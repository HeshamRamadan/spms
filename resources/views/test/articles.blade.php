@foreach($developers as $developer)
	{{$developer->user_id}}
	----
	{{$developer->user->name}}
	<br>
@endforeach