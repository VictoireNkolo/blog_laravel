<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(static function() {
    Route::get('/', 'PageController@login')->name('login.form');
    Route::post('/', 'PageController@saveLogin')->name('login.save');
});

Route::middleware('auth')->group(static function() {
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/logout', 'PageController@logout')->name('logout');

    Route::group(
        [
            'middleware' => ['user'],
            'prefix' => 'user',
        ], static function() {
            Route::get('home/', 'User\DashboardController@index')->name('user.dashboard.index');
        }
    );

    Route::group(
        [
            'middleware' => ['admin'],
            'prefix' => 'admin',
        ], static function() {
            Route::get('home/', 'Admin\DashboardController@index')->name('admin.dashboard.index');
        }
    );


});

