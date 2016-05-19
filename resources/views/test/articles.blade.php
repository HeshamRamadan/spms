
	@foreach($tasks as $task)
	|
		{{$task->id}}
		|
		{{$task->developer->user->name}}
		|
		{{$task->release->id}}
		|
		{{$task->release->project->name}}
		|
		{{$task->release->project->manager->user->name}}
		|
		{{$task->release->project->mehtodology->name}}
	|
	
	<br>
	@endforeach
