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
    return view('post');
});
Route::resource('nameList','TodoController');

Route::post('/CreatePost','TodoController@CreatePOSt');
Route::delete('/delete/{id}','TodoController@delPOSt');
Route::get('/Editdata/{id}','TodoController@EditPost');
Route::post('Editdata/{id}','TodoController@EditData');

//Route::get('/newdata','TodoController@index');