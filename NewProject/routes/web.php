<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');
//Route::get('/', 'MenuController@index');

Route::get('/project', 'PagesController@project');
Route::get('/service', 'PagesController@service');
Route::get('/contact', 'PagesController@contact');
Route::get('/todo', 'PagesController@todo');

Auth::routes();

Route::get('/home', 'HomeController@index');
