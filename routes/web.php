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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users','UsersController@index');
Route::get('/users/{user}','UsersController@show');			
Route::get('/museums/create','MuseumsController@create');
Route::post('/museums','MuseumsController@store')->name('store');
Route::resource('/museums','MuseumsController');