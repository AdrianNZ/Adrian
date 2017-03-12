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


Route::get('/', 'MainController@index');

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin', 'AdminController@index');
    Route::get('admin/project/{id}/delete', 'adminProjectController@iddelete')->name('project.iddelete');
    Route::put('admin/project/{id}/update', 'adminProjectController@idupdate')->name('project.idupdate');
    Route::resource('admin/project','adminProjectController');
    Route::get('admin/category/{id}/delete', 'adminCategoryController@iddelete')->name('category.iddelete');
    Route::get('admin/category/{id}/update', 'adminCategoryController@idupdate')->name('category.idupdate');
    Route::resource('admin/category','adminCategoryController');
    Route::get('admin/skill/{id}/delete', 'adminSkillController@iddelete')->name('skill.iddelete');
    Route::get('admin/skill/{id}/update', 'adminSkillController@idupdate')->name('skill.idupdate');
    Route::resource('admin/skill', 'adminSkillController');
    Route::get('admin/title/{id}/delete', 'adminTitleController@iddelete')->name('title.iddelete');
    Route::get('admin/title/{id}/update', 'adminTitleController@idupdate')->name('title.idupdate');
    Route::resource('admin/title', 'adminTitleController');
    Route::get('admin/nav/{id}/delete', 'adminNavController@iddelete')->name('nav.iddelete');
    Route::get('admin/nav/{id}/update', 'adminNavController@idupdate')->name('nav.idupdate');
    Route::resource('admin/nav', 'adminNavController');
    Route::put('admin/profile/{id}/update', 'adminProfileController@idupdate')->name('profile.idupdate');
    Route::resource('admin/profile', 'adminProfileController');
});
Auth::routes();

Route::get('/home', 'MainController@index');
Route::post('/contact', 'contactController@sendMail');
