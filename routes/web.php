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

Route::group(['prefix' => 'home'], function () {
    Route::get('{path?}', 'HomeController@index')->where('path', '[\/\w\.-]*');
});

Route::get('/login','HomeController@login');
Route::post('/send','GuzzleController@send');
