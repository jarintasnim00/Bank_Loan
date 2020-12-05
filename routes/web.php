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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('', function () {
    return view('open');
});
Route::get('/app', function () {
    return view('applicationfrom');
});
Route::get('/calculatemi', function () {
    return view('Calculate_EMI');
});

Route::get('/verify', function () {
    return view('verifyinfo');
});
Route::get('/approve', function () {
    return view('approve');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bdbank', 'BdController@bdbank')->name('bdbank');
Route::get('/search/{searchKey}', 'BdController@search')->name('search');
Route::POST('/insert', 'appController@insert')->name('insert');
Route::get('/show', 'appController@show')->name('show');
Route::POST('/delete/{id}', 'appController@delete')->name('delete');
Route::get('/show1', 'appController@show1')->name('show1');

//admin
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');

Route::post('admin', 'Admin\LoginController@login');
