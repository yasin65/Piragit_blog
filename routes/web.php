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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/post', 'HomeController@post');
Route::get('/contact', 'HomeController@contact');
Route::get('/category', 'HomeController@category');

Route::get('/dash', 'HomeController@admin');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/category','CategoryController');
Route::resource('/admin/tag','TagController');
Route::resource('/admin/post','PostController');
