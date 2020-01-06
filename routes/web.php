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
Route::get('/p/create','posts@create');
Route::get('/p/{{post}}','posts@show');
Route::post('/p','posts@store');

Route::get('/profile/{user}', 'profilesController@index')->name('profile.show');