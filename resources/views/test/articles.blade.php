
<hr>
@foreach($testers as $testers)
	|
	{{ $testers->user_id }}
	-
	{{ $testers->user->name }}
	|

@endforeach
<hr>