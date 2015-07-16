@extends('core::layouts.master')

@section('title', 'Detail User')

@section('content')
	
	<div class="box">
		<div class="box-header with-border">
			<div class="box-title">
				Detail User
			</div>
			<div class="box-tools pull-right">
				<a class="btn-box-tool" href="{{ route('admin.users.index') }}">
					<i class="fa fa-chevron-left"></i>
					Back
				</a>
			</div>
		</div>
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<td>{!! $user->name !!}</td>
			</tr>
			<tr>
				<th>Username</th>
				<td>{!! $user->username !!}</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>{!! $user->email !!}</td>
			</tr>
			<tr>
				<th>Confirmed?</th>
				<td>{!! $user->confirmed ? 'Yes' : 'No' !!}</td>
			</tr>
			<tr>
				<th>Created At</th>
				<td>{!! $user->created_at !!}</td>
			</tr>
			<tr>
				<th>Last Updated At</th>
				<td>{!! $user->updated_at !!}</td>
			</tr>
		</table>
	</div>

@stop