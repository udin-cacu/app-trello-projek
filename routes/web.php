<?php

use Illuminate\Support\Facades\Route;

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
    return view('splash.index');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	//WORKSPACE
Route::get('/workspace', 'WorkspaceController@index')->name('workspace.index');
Route::get('/workspace/data', 'WorkspaceController@data')->name('workspace.data');
Route::post('/workspace/store', 'WorkspaceController@store')->name('workspace.store');
Route::post('/workspace/delete', 'WorkspaceController@delete')->name('workspace.delete');
Route::post('/workspace/edit', 'WorkspaceController@edit')->name('workspace.edit');
Route::post('/workspace/update', 'WorkspaceController@update')->name('workspace.update');

//BOARD
Route::get('/board', 'BoardController@index')->name('board.index');
Route::get('/board/data', 'BoardController@data')->name('board.data');
Route::post('/board/store', 'BoardController@store')->name('board.store');
Route::post('/board/delete', 'BoardController@delete')->name('board.delete');
Route::post('/board/edit', 'BoardController@edit')->name('board.edit');
Route::post('/board/update', 'BoardController@update')->name('board.update');
Route::get('/board/{id}', 'BoardController@show')->name('board.show');

//KATEGORI
Route::get('/kategori', 'KategoriController@index')->name('kategori.index');
Route::get('/kategori/data', 'KategoriController@data')->name('kategori.data');
Route::post('/kategori/store', 'KategoriController@store')->name('kategori.store');
Route::post('/kategori/delete', 'KategoriController@delete')->name('kategori.delete');
Route::post('/kategori/edit', 'KategoriController@edit')->name('kategori.edit');
Route::post('/kategori/update', 'KategoriController@update')->name('kategori.update');

});
