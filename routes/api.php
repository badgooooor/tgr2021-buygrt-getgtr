<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Todo;

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

Route::get('todos', 'TodoController@index');
Route::get('todos/{id}', 'TodoController@show');
Route::post('todos', 'TodoController@store');
Route::put('todos/{id}', 'TodoController@update');
Route::delete('todos/{id}', 'TodoController@delete');
