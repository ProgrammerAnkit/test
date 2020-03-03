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
Route::post('/student_details', 'UserController@student_details');
Route::get('/show_student_details', 'UserController@read');
Route::get('delete/{id}', 'UserController@delete');
Route::get('edit/{id}', 'UserController@edit');
Route::post('update_user/{id}', 'UserController@update');
