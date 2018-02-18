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

Route::get('/', 'TasksController@index');

Route::post('/user/my-tasks', 'ItemsController@store');
Route::get('/user/my-tasks', 'ItemsController@index');
Route::get('/user/add-task', 'ItemsController@create');
Route::get('/user/my-tasks/{id}/edit', 'ItemsController@edit');
Route::get('/user/my-tasks/{id}/end', 'ItemsController@end');
Route::get('/user/my-tasks/{id}/delete', 'ItemsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middlewareGroups' => 'web'], function (){
	Route::auth();
	Route::resource('tasks','TasksController');
	Route::resource('items','ItemsController');
	Route::resource('types','TypesController');
});
