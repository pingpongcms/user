<div class="modal fade text-left" id="deleteUser{{ $user->id }}">
	<div class="modal-dialog">
		<div class="modal-content"> 
			{!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id]]) !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Delete User</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure want to delete this user?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				<button type="submit" class="btn btn-primary">Delete</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>