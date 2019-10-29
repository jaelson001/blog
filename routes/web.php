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

Route::get('admin', 'PostsController@exibir')->name('admin');

Route::get('admin/criar', 'PostsController@criar')->name('criar');

Route::post('admin/salvar', 'PostsController@salvar')->name('salvarpost');
Route::post('admin/atualisar', 'PostsController@atualisar')->name('atualisar');

Route::get('admin/editar/{slug}', 'PostsController@editar')->name('editar');

Route::post('admin/excluir', 'PostsController@destroy')->name('destroy');



