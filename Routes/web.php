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

    Route::prefix('auth')->group( function()
    {
         Route::get('register','RegisterController@create')->name('register.create');
         Route::post('register','RegisterController@store')->name('register.store');

         Route::get('/home','LoginController@index')->name('login.index');
         Route::get('login','LoginController@create')->name('login.create');
         Route::post('login','LoginController@store')->name('login.store');
         Route::post('/logout','LoginController@destroy')->name('login.destroy');
    });
