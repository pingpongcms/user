<div class="box">
	<div class="box-header">
		<h1 class="box-title">Add New User</h1>
	</div>
	<div class="box-body">
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}	
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
			{!! error_for('name', $errors) !!}
		</div>
		<div class="form-group">
			{!! Form::label('username', 'Username:') !!}	
			{!! Form::text('username', null, ['class' => 'form-control']) !!}
			{!! error_for('username', $errors) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Email:') !!}	
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
			{!! error_for('email', $errors) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password:') !!}	
			{!! Form::password('password', ['class' => 'form-control']) !!}
			{!! error_for('password', $errors) !!}
		</div>
		<div class="form-group">
			<div class="checkbox">
				<label>
					{!! Form::checkbox('confirmed') !!}
					Confirmed?
				</label>
			</div>
		</div>
		<div class="form-group">
			<button class="btn btn-default">Save</button>
		</div>
	</div>
</div>