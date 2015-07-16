<?php namespace Pingpong\Cms\User\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;
use Pingpong\Cms\User\Repositories\UserRepository;

class UsersController extends Controller {
	
	protected $repository;

	public function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}

	public function index()
	{
		$users = $this->repository->paginate(config('user.perpage', 12));

		$no = $users->firstItem();

		return view('user::admin.index', compact('users', 'no'));
	}
	
	public function create()
	{
		return view('user::admin.create');
	}

	public function store(Request $request)
	{
		$data = $request->all();

		$user = $this->repository->create($data);
		
		return redirect()->route('admin.users.show', $user->id);
	}

	public function edit($id)
	{
		$user = $this->repository->find($id);

		return view('user::admin.edit', compact('id', 'user'));
	}

	public function update(Request $request, $id)
	{
		$user = $this->repository->find($id);
		
		$data = $request->all();

		$user->update($data);
		
		return redirect()->route('admin.users.show', $id);
	}

	public function show($id)
	{
		$user = $this->repository->find($id);

		return view('user::admin.show', compact('id', 'user'));		
	}

	public function destroy($id)
	{
		$user = $this->repository->delete($id);

		return redirect()->route('admin.users.index');
	}
}