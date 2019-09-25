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

#Route::get('/', function(){return "<h2 style='color: red;'>Out of service</h2>";});

Route::get('/', 'MainController@getIndex');

Route::get('about', 'MainController@getAbout');
Route::get('services', 'MainController@getServices');
Route::get('faq', 'MainController@getFAQ');
Route::get('gallery', 'MainController@getGallery');
Route::get('events', 'MainController@getEvents');
Route::get('blog', 'MainController@getBlog');

Route::get('contact', 'MainController@getContact');
Route::post('contact', 'MainController@postContact');

