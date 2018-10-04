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


//Thay's

//Route::get('/', function () {
//    return view('auth.login');

//});





//Route::get('/', function () {
//    return view('auth.login');
//});
//Route::get('/register', function (){
//    return view('auth.register');
//});
//Route::view('main','new');
//Route::view('leave','leave');
//Route::view('login','login');
//
//Auth::routes();
//Route::get('/home', 'HomeController@index');
//Route::resource('employees','EmployeesController');

Route::get('/edit', function () {
    return view('pages.edit');
});

Route::get('/view', function () {
    return view('pages.view');
});

Route::get('/viewRequest', function () {
    return view('pages.viewRequest');
});

Route::get('/create', function () {
    return view('pages.create');
});
Route::get('/main', function () {
    return view('main');
});

Route::resource('attendances','AttendanceController');
Route::resource('employees','EmployeeController');
Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/profile', 'HomeController@index')->name('home');
Route::resource('/crons','CronsController');
Route::resource('/performances','PerformancesController');
Route::resource('companies','CompanyController');
