<?php
namespace App\Repositories\User;

use Auth;
use App\User;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\User\UserRepositoryInterface;
use Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($request)
    {   
        if(isset($request['avatar'])) {
            $fileName = $this->uploadAvatar(null);
        } else {
            $fileName = "default.jpg";
        }

        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'avatar' => $fileName,
            'password' => bcrypt($request['password']),
        ]);
    }

    public function update($inputs, $id)
    {
        try {
            $inputs['password'] = Hash::make($inputs['password']);
            $oldImage = Auth::user()->avatar;
            if (isset($inputs['avatar'])) {
                $image = $this->uploadAvatar($oldImage);
                $inputs['avatar'] = $image;
            } else {
                $inputs['avatar'] = $oldImage;
            }
            $data = $this->model->where('id', $id)->update($inputs);
        } catch (Exception $e) {
            return view('user/home')->withError(trans('message.update_error'));
        }
        if (!$data) {
            throw new Exception(trans('message.update_error'));
        }
        return $data;
    }

    public function uploadAvatar($oldImage)
    {
        $file = Input::file('avatar');
        $destinationPath = base_path() . trans('user.avatar_path');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        Input::file('avatar')->move($destinationPath, $fileName);

        if (!empty($oldImage) && file_exists($oldImage)) {
            File::delete($oldImage);
        }

        return $fileName;
    }
}
