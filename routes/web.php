<?php

use Illuminate\Contracts\Session\Session;
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

Route::get('/', 'App\Http\Controllers\HomeController@show');

Route::get('/{version}/{book}/{chapter}', 'App\Http\Controllers\BookController@showChapter');
Route::get('/{version}/{book}', 'App\Http\Controllers\BookController@showChapters');

Route::get('/{version}', 'App\Http\Controllers\VersionController@show');

Route::get('/crawler/{version}/{book}/{chapter}', 'App\Http\Controllers\BookController@crawler');
