<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'AuthenticateController@authenticate');
Route::post('/register', 'AuthenticateController@register');

//Route::middleware('jwt.auth')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('jwt.auth')->group(function (){
    Route::get('todo', 'TodoController@index');
    Route::post('todo','TodoController@store');
    Route::get('deleteTodo/{id}','TodoController@delete');
    Route::post('updateTodo/{id}','TodoController@update');
});