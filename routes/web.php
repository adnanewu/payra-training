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

Route::get('/','Demo@index');
Route::post('InsertData','Demo@store');
Route::get('ListData','Demo@create');
Route::get('Del/{id}','Demo@show');
Route::get('edit/{id}','Demo@edit');
Route::post('update/{id}','Demo@updateData');