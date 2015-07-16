@extends('core::layouts.master')

@section('title', 'Edit User')

@section('content')
	
	{!! Form::model($user, ['files' => true, 'method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}
	@include('user::admin.form')
	{!! Form::close() !!}

@stop