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

Route::prefix('/admin')->name('admin.')->group(function(){

    Route::get('login', ['as'=>'showLogin', 'uses'=>'Auth\AdminLoginController@showLoginForm']);
    Route::post('login', ['as'=>'login','uses'=>'Auth\AdminLoginController@login']);

    Route::get('logout', ['as'=>'logout', 'uses'=>'Auth\AdminLoginController@logout']);

    Route::get('register', ['as'=>'showRegister', 'uses'=>'Auth\AdminRegisterController@showRegistrationForm']);
    Route::post('register', ['as'=>'register', 'uses'=>'Auth\AdminRegisterController@register']);
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function(){
            return view('admin.index');
        })->name('home');
        Route::namespace('Admin')->group(function () {
            Route::resource('users', 'UserController');
        });
    });
});

Route::group(['middleware' => ['auth:web']], function () {
    Route::resource('/users', 'UserController')->only(['index','update']);
});

Auth::routes();
