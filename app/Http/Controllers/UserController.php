<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {


        $errors = new MessageBag; // initiate MessageBag

        $credentials = [
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->account_type == 'company' && Auth::user()->company_type == 'commercial')
            {
                return Redirect::to('profile')->with('alert-success', 'You are now logged in.');

            }
            elseif (Auth::user()->account_type == 'delegate' && Auth::user()->is_active == '1')
            {
                return Redirect::to('account')->with('alert-success', 'You are now logged in.');

            }
            elseif (Auth::user()->account_type == 'user' && Auth::user()->is_active == '1')
            {
                return redirect()->route('user_account')->with('alert-success', 'You are now logged in.');

            }
        }
        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);

        return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));

    }

    public function get_user_register()
    {
        return view('home.user_register');
    }

    public function store(Request $request)
    {


        {
            $this->validate($request,[
                'email' => 'required|email|unique:users',
                'username' => 'required|unique:users',
                'password' => 'required|min:3|max:20',
                'confirm_password' => 'required|min:3|max:20|same:password',
                'name'=>'required',
                'phone'=>'required|unique:users',
                'country'=>'required',
                'city'=>'required'
            ]);


        }

        $user = new User();
        $email = $request->input('email');
        $username = $request->input('username');
        $password=bcrypt($request->input('password'));
        $name=$request->input('name');
        $phone=$request->input('phone');
        $country=$request->input('country');
        $city=$request->input('city');
        $user->email=$email;
        $user->username=$username;
        $user->password=$password;
        $user->name=$name;
        $user->phone=$phone;
        $user->country=$country;
        $user->city=$city;
        $user->account_type='user';

        $user->save();

        $request->session()->flash('alert-success', 'successful operation , pleas check your email and complete your registration');
        return redirect()->back();


    }

    public function get_user_profile()
    {
        return view('user.account');
    }
}
