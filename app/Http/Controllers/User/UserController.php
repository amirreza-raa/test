<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index' ,compact('users') );
    }

    public function create()
    {
        
        return view('users.create');
    }


    public function store(UserCreateRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make('password');

        User::create($data);

        $request->session()->flash('status', 'کاربر به درستی ایجاد شد!');

        return redirect()->route('users.index');
    }

  
    public function edit(User $user)
    {
        return view('users.edit' , compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
            $user->update($request->validated());

            $request->session()->flash('status' , 'اطلاعات یوزر اپدیت شد');

            return redirect()->route('users.index');
    }

   
    public function destroy(Request $request , User $user)
    {
        $user->delete();
        $request->session()->flash('status', 'کاربر مد نظر به درستی حذف شد!');

        return back();
    }
}
