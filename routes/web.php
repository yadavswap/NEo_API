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

// Route::get('/', function () {
//     return view('neogetbydt');
// });

Route::get('/', 'ApiNeoController@neogetbydt');
Route::post('colldate', 'ApiNeoController@colldate');

Route::get('getdata', 'ApiNeoController@getdata');
