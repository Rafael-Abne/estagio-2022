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
        return redirect()->route('login');
    })->name('welcome');

    Route::get('dashboard', 'Admin\HomeController@index')->name('home');

    //rotas login
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Admin\Auth\LoginController@login');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

    //rotas admin dashboard
    Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function () {
        //routes user
        Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
        Route::resource('user', 'UserController', ['except' => ['show']]);
        //routes register
        Route::get('registers', 'HomeController@listRegisters')->name('registers.index');
    });

    //routas para matrícula
    Route::group(['prefix' => 'matricula'], function () {
        Route::get('graduacao', 'RegisterController@index')->name('matricula_graduacao.store');
    });





