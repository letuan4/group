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

use \Illuminate\Support\Facades\Route;

Route::middleware('language')->group(function () {
    Route::post('a', 'Language\LanguageController@language')->name('language')->middleware('language');

    Route::get('login', "Authenticate\LoginController@showViewLogin")->name('login');

    Route::post('login', "Authenticate\LoginController@login")->name('post-login');
    Route::middleware('login')->group(function () {
        Route::get('/11', function () {
            return view('welcome');
        });
    });
});