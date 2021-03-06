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

Route::get('/', 'ArticleController@items');
Route::get('/{id}','ArticleController@showitem')->name('items');
Route::post('/{create}','ArticleController@create')->name('create');
Route::delete('/{delet}','ArticleController@delet')->name('delet');
