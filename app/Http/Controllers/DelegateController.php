<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class DelegateController extends Controller
{
    public function get_delegate_register()
    {
        return view('home.delegate_register');
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
                'bank_number'=>'required',
                'city'=>'required'
            ]);


        }

        $delegate = new User();
        $email = $request->input('email');
        $username = $request->input('username');
        $password=bcrypt($request->input('password'));
        $name=$request->input('name');
        $phone=$request->input('phone');
        $bank_number=$request->input('bank_number');
        $country=$request->input('country');
        $city=$request->input('city');
        $delegate->email=$email;
        $delegate->username=$username;
        $delegate->password=$password;
        $delegate->name=$name;
        $delegate->phone=$phone;
        $delegate->bank_number=$bank_number;
        $delegate->country=$country;
        $delegate->city=$city;
        $delegate->account_type='delegate';
//        $delegate->specify='delegate';

        $delegate->save();

        $request->session()->flash('alert-success', 'successful operation , pleas check your email and complete your registration');
        return redirect()->back();


    }

    public function get_account()
    {
        return view('delegate.account');
    }

}
