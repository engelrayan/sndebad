<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Home Controller
Route::get('','HomeController@index')->name('index');

Route::get('register','HomeController@user_register')->name('user_register');



//Company Controller

Route::get('registercompany','CompanyController@get_company_register')->name('company_register');
Route::post('registercomp','CompanyController@store')->name('post_company');

Route::get('profile','CompanyController@get_profile')->name('profile');


//User Controller
Route::post('login','UserController@login')->name('user_login');
Route::get('registeruser','UserController@get_user_register')->name('get_user_register');
Route::post('postuser','UserController@store')->name('post_user');
Route::get('useraccount','UserController@get_user_profile')->name('user_account');




//Delegate Controller

Route::get('registerdeleg','DelegateController@get_delegate_register')->name('get_delegate_register');
Route::post('postdelegate','DelegateController@store')->name('store_delegate');
Route::get('account','DelegateController@get_account')->name('account');

