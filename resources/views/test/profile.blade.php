<h1> {{$user->name}}'s Profile</h1>







@foreach($user->articles  as $article)
	<h1>{{	$article->title	}} bosted by ...{{ $article->user->name }}</h1>
	<p>{{$article->body}}</p>
@endforeach

<hr>
