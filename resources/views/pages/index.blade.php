@extends('pages.master')

@section('head')
@stop

@section('title')
	Task Page
@stop

@section('heading')
	 Reviews page 
	 <p></p><p></p><p></p> <p></p><p></p><p></p>
@stop

@section('content')
	 <p></p><p></p><p></p> <p></p><p></p><p></p>
	 @foreach ($tasks as $task)
		 <h3>
		 Category : {{ $task->category }}
		 </h3>
		 <h3>
		 Title : <a href="/task/{{ $task->id }}">{{ $task->title }}</a>
		 &sdot;&sdot;&sdot;&sdot;&sdot;
	{{---	Title : <a href="{{ action('ReviewController@show', [$task->id]) }}">{{
		$task->title }}</a>
		 &sdot;&sdot;&sdot;&sdot;&sdot;
		 Title : <a href="{{ url('/task', $task->id) }}">{{ $task->title }}</a> --}}
		 </h3>
		<a href="{{ url('/remove', $task->id) }}">Remove</a>
	 @endforeach
@stop

@section('footer')
	<p></p>
	 <p></p><p></p><p></p><p></p><p></p><p></p>
	<p></p><p></p><p></p><p></p>
	&sdot;&sdot;&sdot;&sdot;&sdot;
	 <a href="{{ url('/create') }}">Create New Reviews</a>
	 &sdot;&sdot;&sdot;&sdot;&sdot;
	 <p></p>
	 <p></p><p></p><p></p><p></p><p></p><p></p>
	<p></p><p></p><p></p><p></p>
	Made by Antonio Lolić @2017
@stop