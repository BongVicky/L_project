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
Route::get('/holiday', function () {
    return view('pages.holiday');
});

Route::get('/tasks', function () {
    return view('pages.tasks');
});
Route::get('/employees', function () {
    return view('pages.employees');
});
Route::view('main','main');

Route::view('leave','employee.leave_table');
Route::view('login','login');

Auth::routes();
Route::view('/home', 'pages.home');
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

Route::get('/tasks', function () {
    return view('pages.tasks');
});

Route::get('/renewContract', function () {
    return view('pages.renewContract');
});
//Route::get('/main', function () {
//    return view('main');
//});
Route::resource('attendances','AttendanceController');
Route::resource('employees','EmployeeController');
Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/profile', 'HomeController@index');
ROute::post('/profile', 'HomeController@update_avatar');
Route::resource('/crons','CronsController');
Route::resource('/performances','PerformancesController');
Route::resource('/contracts','ContractsController');
Route::resource('/user','RequestsController');
Route::resource('/contracts', 'ContractsController');
Route::resource('companies','CompanyController');
//Route::get('events', 'EventController@index');