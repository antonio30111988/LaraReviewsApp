@extends('pages.master')

@section('head')
@stop

@section('title')
	Edit reviews
@stop

@section('heading')
	Edit reviews page
@stop

@section('content')
	 @foreach ($tasks as $task)
	 <h3>
	 Category : {{ $task->category }}
	 </h3>
	 <h3>
	Title : <a href="{{ url('/edit', $task->id) }}">{{ $task->title }}</a>
	 </h3>
	 @endforeach
@stop

@section('footer')
	<a href="{{ url('/create') }}">Create New Reviews</a>
	Made by Antonio
@stop