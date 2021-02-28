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
use App\Http\Middleware\Cors;

Route::get('/login', 'UserController@login')->name('login');
Route::post('/login', 'UserController@finishLogin')->name('login');

Route::get('/register', 'UserController@register')->name('register');
Route::post('/register', 'UserController@finishRegister')->name('register');

Route::get('logout', 'UserController@logout')->name('logout');

Route::get('/', 'PostsController@index');

Route::get('/post/{slug}', 'PostsController@post');

Route::group(['prefix'=>'admin', 'middleware' => 'user-auth'], function(){
	Route::get('/', 'PostsController@exibir')->name('admin');

	Route::get('criar', 'PostsController@criar')->name('criar');

	Route::post('salvar', 'PostsController@salvar')->name('salvarpost');

	Route::post('atualisar', 'PostsController@atualisar')->name('atualisar');

	Route::get('editar/{slug}', 'PostsController@editar')->name('editar');

	Route::post('excluir', 'PostsController@destroy')->name('destroy');
});

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function(){
	Route::get('posts', 'ApiController@posts');
	Route::get('post/{id}', 'ApiController@single');
});



