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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function (){
    return view('auth.register');
});
Route::view('main','new');
Route::view('leave','leave');
Route::view('login','login');

Auth::routes();


//Route::get('/admin', 'AdminController@index');

//Route::get('/main', 'HomeController@emp');
//Route::view('/new','newemp');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
Route::resource('/contracts','ContractsController');
Route::resource('/employees','EmployeesController');
Route::get('/profile', 'HomeController@index')->name('home');
