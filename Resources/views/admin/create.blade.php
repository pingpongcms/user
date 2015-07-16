@extends('core::layouts.master')

@section('title', 'Add New User')

@section('content')
	
	{!! Form::open(['files' => true, 'route' => 'admin.users.store']) !!}
	@include('user::admin.form')
	{!! Form::close() !!}

@stop