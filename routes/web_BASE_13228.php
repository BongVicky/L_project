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
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
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
Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/add', function () {
    return view('pages.add');
});

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