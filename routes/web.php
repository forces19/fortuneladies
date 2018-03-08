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

// route homepage
Route::get('/', 'IndexController@index');

// route products
Route::get('products', 'ProductsController@index');

// route about
Route::get('about', 'AboutController@index');

// route contact
Route::get('contact', 'ContactController@index');

Auth::routes();

Route::get('create','HomeController@create');
// Route::get('siswa/{siswa}', 'SiswaController@show');
Route::post('create','HomeController@store');
Route::get('home/{id}/edit', 'HomeController@edit');
Route::patch('home/{id}', 'HomeController@update');
Route::delete('home/{id}', 'HomeController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
