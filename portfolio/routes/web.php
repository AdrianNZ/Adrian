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

Auth::routes();

Route::get('/home', 'MainController@index');
Route::post('/contact', 'contactController@sendMail');

Route::get('/', 'MainController@index');
Route::get('docs/{file?}', 'Docscontroller@show');

Route::group(['prefix'=>'admin', 'middleware' => 'admin'], function () {
    Route::get('', 'AdminController@index');
    Route::get('project/{id}/delete', 'adminProjectController@iddelete')->name('project.iddelete');
    Route::put('project/{id}/update', 'adminProjectController@idupdate')->name('project.idupdate');
    Route::resource('project','adminProjectController');
    Route::get('category/{id}/delete', 'adminCategoryController@iddelete')->name('category.iddelete');
    Route::get('category/{id}/update', 'adminCategoryController@idupdate')->name('category.idupdate');
    Route::resource('category','adminCategoryController');
    Route::get('skill/{id}/delete', 'adminSkillController@iddelete')->name('skill.iddelete');
    Route::get('skill/{id}/update', 'adminSkillController@idupdate')->name('skill.idupdate');
    Route::resource('skill', 'adminSkillController');
    Route::get('title/{id}/delete', 'adminTitleController@iddelete')->name('title.iddelete');
    Route::get('title/{id}/update', 'adminTitleController@idupdate')->name('title.idupdate');
    Route::resource('title', 'adminTitleController');
    Route::get('nav/{id}/delete', 'adminNavController@iddelete')->name('nav.iddelete');
    Route::get('nav/{id}/update', 'adminNavController@idupdate')->name('nav.idupdate');
    Route::resource('nav', 'adminNavController');
    Route::put('profile/{id}/update', 'adminProfileController@idupdate')->name('profile.idupdate');
    Route::resource('profile', 'adminProfileController');
});

