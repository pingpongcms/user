<?php

Menu::modify('sidebar', function ($menu)
{
	$menu->dropdown('Users', function ($sub)
	{
		$sub->route('admin.users.index', 'All Users');	
		$sub->route('admin.users.create', 'Add New');	
	}, ['icon' => 'fa fa-users'])->order(2);
});

