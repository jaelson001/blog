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
Route::get('/login', 'PostsController@login')->name('login');

Route::get('/', 'PostsController@index');

Route::get('/post/{slug}', 'PostsController@post');

Route::group(['prefix' => 'admin'],function(){
	Route::get('/', 'PostsController@exibir')->name('admin');
	Route::get('criar', 'PostsController@criar')->name('criar');
	Route::post('salvar', 'PostsController@salvar')->name('salvarpost');
	Route::get('excluir', 'PostsController@excluir')->name('excluir');
	Route::get('editar/{$slug}', 'PostsController@editar');
});


