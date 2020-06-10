<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PublicController@index');
Route::get('/app', 'AppController@index');
Route::get('/app/web', 'AppController@indexWeb');
Route::get('/app/mobile', 'AppController@indexMobile');
Route::get('/app/desktop', 'AppController@indexDesktop');

Route::get('/app/dinus-virtual-tour', 'AppController@showAppDetail');

Route::get('/app/user', 'AppController@showUser');

