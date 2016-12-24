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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('project/{pid}/task/{tid}/destroy', 'TaskController@TaskDelete')->name('taskid.destroy');
    Route::get('project/{pid}/task/{tid}/update', 'TaskController@TaskUpdate')->name('taskid.update');
    Route::get('project/{id}/destroy', 'ProjectController@ProjectDelete')->name('projectid.destroy');
    Route::get('project/{id}/update', 'ProjectController@ProjectUpdate')->name('projectid.update');
    Route::resource('project', 'ProjectController');
    Route::get('task', 'TaskController@all');
    Route::resource('project.task', 'TaskController');
    Route::get('home', 'HomeController@index');

});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin', 'AdminController@index');
});

