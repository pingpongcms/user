@extends('core::layouts.master')

@section('title', 'Users')

@section('content')
	
	<div class="box">
		<div class="box-header with-border">
			<div class="box-title">
				Users
			</div>
			<div class="box-tools pull-right">
				<a class="btn-box-tool" href="{{ route('admin.users.create') }}">
					<i class="fa fa-plus"></i>
					Add New
				</a>
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<th width="5%" class="text-center">#</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Confirmed</th>
				<th>Created At</th>
				<th class="text-center">Action</th>
			</thead>
			@foreach ($users as $user)
				<tr>
					<td class="text-center">{{ $no }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->username }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->confirmed ? 'Yes' : 'No' }}</td>
					<td>{{ $user->created_at }}</td>
					<td class="text-center">
						<div class="btn-group">
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Action <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu pull-right">
						    <li><a href="{{ route('admin.users.show', $user->id) }}">View Detail</a></li>
						    <li><a href="{{ route('admin.users.edit', $user->id) }}">Edit</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a data-toggle="modal" href="#deleteUser{{ $user->id }}">Delete</a></li>
						  </ul>
						</div>
						@include('user::admin.partials._delete', compact('user'))
					</td>
				</tr>
				<?php $no++; ?>
			@endforeach
		</table>
		<div class="box-footer">
			<div class="text-center">
				{!! $users->render() !!}
			</div>
		</div>
	</div>

@stop