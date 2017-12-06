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

// First Route method – Root URL will match this method
//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
    return view('templates.loginadmin');
});

Route::get('/index', function () {
    return view('templates.dashboard');
});

Route::get('/test', function () {
    return view('templates.tambahpekerja');
});

Route::get('/test', 'DashboardController@post')->name('post.pekerja');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index');
