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


Auth::routes();

Route::group(['middleware' => ['guest']], function () {
    // Guest routs
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', function () {
        return view('home');
    });
});

Route::group(['middleware' => ['auth']], function () {
    // Authorized routs
    Route::get('/zamowienia', 'ZamowieniaController@index')->name('zamowienia');
});

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
