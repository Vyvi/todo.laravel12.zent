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

// Route::get('/', function () {
//     return view('welcome');
	// Route::get('todos','TodoController@index');
	// Route::get('todos/create','TodoController@create');
	// Route::get('todos/{id}','TodoController@show');
	// Route::post('todos','TodoController@store');
	// Route::delete('todos/{id}','TodoController@destroy');
	// Route::get('todos/{id}/edit','TodoController@edit');
	// Route::put('todos/{id}', 'TodoController@update');
	// Route::resource('todos','TodoController');
	// Route::get('hello','StudentController@hello');
	Route::resource('students','StudentController');
	Route::resource('todos-ajax','TodoAjaxController');
	

