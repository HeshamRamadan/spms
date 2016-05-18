
	@foreach($issues as $issue)
	|
		issue id:  {{$issue->id}}
		|
		issue dev: {{$issue->developer->user->name}}
		|
		issue release : {{$issue->release->id}}
		|
		issue project name: {{$issue->release->project->name}}
		|
		issue tester: {{$issue->tester->user->name}}
		|

	|
	<br>
	@endforeach

