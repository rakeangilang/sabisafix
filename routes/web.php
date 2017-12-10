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
    $active = 'dashboard';
    return view('templates.dashboard', compact('active'));
});

// Route::get('/test', function () {
//     return view('templates.tambahkaryawan');
// });

Route::get('/tambah-karyawan', 'DashboardController@post')->name('post.pekerja');

Route::post('/tambah-karyawan', 'TambahUserController@karyawan')->name('tambahuser.karyawan');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index');
