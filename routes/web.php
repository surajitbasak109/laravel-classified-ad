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

Route::get(
    '/', function () {
        return view('welcome');
    }
);

Auth::routes();

Route::group(
    [
      'prefix' => 'admin',
      'namespace' => 'admin',
      'middleware' => 'auth',
      'as' => 'admin.'
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('/category', 'CategoryController');
    }
);

Route::get('/post-ad', 'PostAdController@create')->name('post-ad');
