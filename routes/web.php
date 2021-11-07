<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('index'); //rotta visibile solo agli utenti

//rotta che gestirà i post per l'utente generico
Route::resource('/posts', 'PostController');

//rotte che gestiscono l'autenticazione
Auth::routes();

//rotte che gestiscono il back office
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')
    ->group(function() {
        Route::get('/', 'HomeController@index')->name('index');
        Route::resource('/posts', 'PostController');
    });
