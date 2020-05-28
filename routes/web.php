<?php

use Illuminate\Http\Request;
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

Route::get('/',         'TasksController@index')->name('tasks.index');

Route::get('login',     'Auth\LoginController@showLoginForm')->name('login'); // ruta de la vista

Route::post('signin',   'Auth\LoginController@login')->name('signin'); // ruta del post del login

Route::post('logout',   'Auth\LoginController@logout')->name('logout'); // ruta de el logout

// Auth::routes();

Route::get('/app',      'TasksController@app')->name('tasks.app');