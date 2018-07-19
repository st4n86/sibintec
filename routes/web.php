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

Route::get('/', 'TaskController@index')->name('index');;
Route::post('/done/{id}', 'TaskController@done')->where('id', '[0-9]+')->name('done');
Route::post('/undone/{id}', 'TaskController@undone')->where('id', '[0-9]+')->name('undone');
Route::post('/add', 'TaskController@add')->name('add');