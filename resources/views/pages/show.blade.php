@extends('pages.master')

@section('head')
@stop

@section('title')
 Review page of {{ $tasks->title }}
@stop

@section('heading')
 {{ $tasks->title }}
@stop

@section('content')
	 <h3>
	 Category : {{ $tasks->category }}
	 </h3>
	 <h3>
	 Title : {{ $tasks->title }}
	 </h3>
	 <div class='h2'>
	 Review : {{ $tasks->content }}
	 </div>
	 <div class='h1'>
	 Rating : {{ $tasks->rating }}
	 </div>
	<p></p>
	 <a href="{{ url('/review') }}">Back Home</a>
	 &sdot;&sdot;&sdot;&sdot;&sdot;
@stop

@section('footer')
	<p></p>
	 <a href="{{ url('/create') }}">Create New Review</a>
	 SALONASOFT @2017
@stop