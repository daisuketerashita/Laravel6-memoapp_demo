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

Route::get('/','MemosController@index')->name('index');

Route::get('/create','MemosController@create')->name('create');
Route::post('/create','MemosController@store')->name('store');

Route::get('/edit','MemosController@edit')->name('edit');
Route::post('/edit','MemosController@update')->name('update');


Route::get('/delete','MemosController@delete')->name('delete');
