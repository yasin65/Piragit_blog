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

Route::get('/', 'HomeController@index')->name('website.home');
Route::get('/about', 'HomeController@about')->name('website.about');
Route::get('/post/{slug}', 'HomeController@post')->name('website.post');
Route::get('/contact', 'HomeController@contact')->name('website.contact');
Route::get('/category/{slug}', 'HomeController@category')->name('website.category');
Route::post('/send', 'HomeController@send_message')->name('website.send');
Route::get('/tag/{slug}', 'HomeController@tag')->name('website.tag');

Route::get('/dashboard', 'DashboardController@admin')->name('dashboard');


Auth::routes();
Route::group(['prefix' => 'admin'], function () {

Route::resource('/category','CategoryController');
Route::resource('/tag','TagController');
Route::resource('/post','PostController');


// setting
Route::get('setting', 'SettingController@edit')->name('setting.index');
Route::post('setting', 'SettingController@update')->name('setting.update');


});