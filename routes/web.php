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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'BookController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/{id}/show', 'AdminController@show');
Route::get('/admin/create', 'AdminController@create');
Route::post('/admin', 'AdminController@store');
Route::post('/admin/{id}/delete', 'AdminController@destroy');
