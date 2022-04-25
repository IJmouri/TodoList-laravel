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

Route::get('/todo/add', [
	'uses' =>'TodoController@addView',
	'as'   => 'add-task'
]);

Route::post('/todo/save', [
	'uses' =>'TodoController@saveitem',
	'as'   => 'new-item'
]);

Route::get('/todo', [
	'uses' =>'TodoController@manageList',
	'as'   => 'manage-item'
]);

Route::get('/todo/undone/{id}', [
	'uses' =>'TodoController@undoneitem',
	'as'   => 'undone-item'
]);

Route::get('/todo/done/{id}', [
	'uses' =>'TodoController@doneitem',
	'as'   => 'done-item'
]);
Route::get('/todo/edit/{id}', [
	'uses' =>'TodoController@edititem',
	'as'   => 'edit-item'
]);

Route::post('/todo/update', [
	'uses' =>'TodoController@updateitem',
	'as'   => 'update-item'
]);

Route::get('/item/deleteitem/{id}', [
	'uses' =>'TodoController@deleteitem',
	'as'   => 'delete-item'
]);

Route::get('/history', [
	'uses' =>'TodoController@history',
	'as'   => 'history-item'
]);

Route::get('/item/HistoryClear', [
	'uses' =>'TodoController@ClearHistory',
	'as'   => 'clear-history'
]);

Auth::routes();

Route::get('/', 'TodoController@index')->name('home');
