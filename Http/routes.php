<?php

backend_routes(function ()
{
	Route::group(['namespace' => 'Pingpong\Cms\User\Http\Controllers\Admin'], function()
	{
		Route::resource('users', 'UsersController', [
			'names' => [
				'index' => 'admin.users.index',
				'create' => 'admin.users.create',
				'store' => 'admin.users.store',
				'edit' => 'admin.users.edit',
				'update' => 'admin.users.update',
				'show' => 'admin.users.show',
				'destroy' => 'admin.users.destroy',
			]
		]);
	});
});