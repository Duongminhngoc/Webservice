<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests;
use Session;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepository;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
     public function index()
    {
        $users = $this->userRepository->paginate(trans('user.limit'));
        $i=1;
        return view('admin.user.index', compact('users','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->only('user_access_level', 'name', 'email', 'password', 'city', 'avatar', 'gender', 'phone_number', 'address');
        $user = $this->userRepository->create($input);
        Session::flash('msg', trans('user.create_user_successfully'));

        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);
        //$users=Restaurant::find('owner_id',$id)->get();
        $u=DB::table('restaurants')->where('owner_id', $id);
        //sdd($u);
        if (empty($user)) {
            Session::flash('msg', trans('user.user_not_found'));
            return redirect(route('user.index'));
        }

        return view('admin.user.show',compact('u'))->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Session::flash('msg', trans('user.user_not_found'));
            return redirect(route('user.index'));
        }

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Session::flash('msg', trans('user.user_not_found'));
            return redirect(route('user.index'));
        }
        $input = $request->only('user_access_level', 'name', 'email', 'password', 'city', 'avatar', 'gender', 'phone_number', 'address');
        $user = $this->userRepository->update($input, $id);
        Session::flash('msg', trans('user.update_user_successfully'));

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);
        if (empty($user)) {
            Session::flash('msg', trans('user.user_not_found'));
            return redirect(route('user.index'));
        }
        $this->userRepository->delete($id);
        Session::flash('msg', trans('user.delete_user_successfully'));

        return redirect(route('user.index'));
    }
}
