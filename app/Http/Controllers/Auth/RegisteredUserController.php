<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    { 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'family' =>[ 'required' , 'string' , 'min:3' ],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'city' =>[ 'required' , 'string' , 'min:3' ],
            'word' =>[ 'required' , 'string' , 'min:3' ],
            'post' =>[ 'required' , 'string' , 'min:3' ],
            'phone' =>[ 'required' , 'numeric' ],
            'date' =>[ 'required' ],
            'file' =>[ 'required' ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
      

            $user = new User();
            $user->name=$request->name;
          $user->family=$request->family;
           $user->email=$request->email;
        $user->city=$request->city;
            $user->word=$request->word;
            $user->post=$request->post;
           $user->phone=$request->phone;
            $user->date=$request->date;
            $user->file=$request->file;
            // $user->password=$request->bcrypt('password');
            // $user->password =$request-> Hash::make($request->password),
            $user->password=$request->password;
            $user->save();

            // 'name' => $request->name,
            // 'family' => $request->family,
            // 'email' => $request->email,
            // 'city' => $request->city,
            // 'word' => $request->word,
            // 'post' => $request->post,
            // 'phone' => $request->phone,
            // 'data' => $request->data,
            // 'file' => $request->file,
            // 'password' => Hash::make($request->password),
       

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
