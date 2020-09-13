<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// note that the prefix is admin all file Route


Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.index');

});

Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

});
