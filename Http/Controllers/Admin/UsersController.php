<?php namespace Pingpong\Cms\User\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;
use Pingpong\Cms\User\Repositories\UserRepository;

class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = $this->repository->paginate(config('user.perpage', 12));

        $no = $users->firstItem();

        return view('user::admin.index', compact('users', 'no'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user::admin.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $user = $this->repository->create($data);

        return redirect()->route('admin.users.show', $user->id);
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = $this->repository->find($id);

        return view('user::admin.edit', compact('id', 'user'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = $this->repository->find($id);

        $data = $request->all();

        $user->update($data);

        return redirect()->route('admin.users.show', $id);
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = $this->repository->find($id);

        return view('user::admin.show', compact('id', 'user'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = $this->repository->delete($id);

        return redirect()->route('admin.users.index');
    }
}