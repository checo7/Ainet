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

Route::get('/dash', function () {
    return view('dash');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/requests', 'RequestController@index')->name('requests');

Route::get('/requests/create', 'RequestController@create')->name('requestsCreate');