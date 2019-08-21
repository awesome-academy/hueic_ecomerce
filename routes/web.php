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
    return view('front.index');
})->name('home');

Route::group(['prefix'=>'admin','middleware' => ['auth:admin']], function(){
    Route::get('/',function(){
        return view('admin.index');
    })->name('admin');
});

Route::group(['middleware' => ['auth:web']], function () {
    Route::resource('/users','UserController')->only(['index','update']);
});

Auth::routes();

Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');

Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);
