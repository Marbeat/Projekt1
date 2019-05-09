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


Auth::routes(['verify' => true]);

Route::get('/', function () {
return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin', 'AdminController')->middleware('is_admin');

Route::get('admin/orders', 'AdminController@show')->name('admin/orders');
Route::get('/oferta', 'SitesController@oferta')->name('oferta');
Route::get('/kontakt', 'SitesController@kontakt')->name('kontakt');

Route::group(['middleware' => ['auth']], function () {
    // Authorized routs for users for each sites
Route::get('/panel', 'SitesController@panel')->name('panel');
Route::resource('orders', 'OrdersController')->middleware('verified');
});

