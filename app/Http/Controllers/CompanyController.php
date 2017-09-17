<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    public function get_company_register()
    {
        return view('home.company_register');
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
                'specify'=>'required',
                'country'=>'required',
                'bank_number'=>'required',
                'city'=>'required'
            ]);


        }

    $company = new User();
    $email = $request->input('email');
    $username = $request->input('username');
    $password=bcrypt($request->input('password'));
    $name=$request->input('name');
    $specify=$request->input('specify');
    $phone=$request->input('phone');
    $bank_number=$request->input('bank_number');
    $country=$request->input('country');
    $city=$request->input('city');
    $company->email=$email;
    $company->username=$username;
    $company->password=$password;
    $company->name=$name;
    $company->specify=$specify;
    $company->phone=$phone;
    $company->bank_number=$bank_number;
    $company->country=$country;
    $company->city=$city;
    $company->account_type='company';
    $company->company_type='commercial';

    $company->save();

    $request->session()->flash('alert-success', 'successful operation , pleas check your email and complete your registration');
    return redirect()->back();


}
public function get_profile()
{
    return view('company.profile');
}

}
