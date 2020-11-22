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

Route::get('/', 'FrontController@index')->name('frontpage');

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
Route::get('/{category:name}', 'FrontController@category')->name('front.category');
Route::post('/store-ad', 'PostAdController@store')->name('public.store-ad');

Route::group(
    [
    'prefix' => 'ajax',
    'as' => 'ajax.'
    ],
    function () {
        Route::post('get_states', 'AjaxController@state');
        Route::post('get_cities', 'AjaxController@city');
        Route::get('search_icons', 'AjaxController@icons')->name('search_icon');
        Route::post('/post/upload_file', 'AjaxController@uploadDropzone')->name('post.dropzone_upload');
    }
);
