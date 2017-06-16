@extends('pages.master')

@section('head')
@stop

@section('title')
	Creating Reviews
@stop
@section('heading')
	Create new review
@stop

@section('content')
	<div class="formgroup">
		{!! Form::open(['url' => 'create/task']) !!}
			<div class="formgroup">
				{!! Form::label('category', 'Category') !!}
				{!! Form::text('category', null, ['class' => 'formcontrol',
				'required'])!!}
			</div>
			<div class="formgroup">
				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title', null, ['class' => 'formcontrol',
				'required'])!!}
			</div>
		
			<div class="formgroup">
				{!! Form::label('content', 'Content') !!} {!!
				Form::textarea('content', null, ['class' => 'formcontrol',
				'required']) !!}
			</div>
			<div class="formgroup">
				{!! Form::label('rating', 'Rating') !!}
				{!! Form::text('rating', null, ['class' => 'formcontrol',
				'required'])!!}
			</div>
		
			{!! Form::submit("Create Review") !!}
		{!! Form::close() !!} 
	</div>
@stop

@section('footer')
	<a href="{{ url('/editreview') }}">Edit reviews page instead create new one</a>

	Made by Antonio Lolić
@stop