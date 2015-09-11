<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('home.index');
});

Route::post('/blog/add', [
    'uses'  => '\Mitschool\Http\Controllers\BlogController@postAdd',
    'as'    => 'tambah.blog.post',
]);

Route::get('/mahasiswa', [
	'uses' => '\App\Http\Controllers\MahasiswaController@index',
	'as'   => 'mahasiswa',
]);

Route::get('/mahasiswa/add', [
	'uses' => '\App\Http\Controllers\MahasiswaController@create',
	'as'   => 'tambah.mahasiswa',
]);

Route::post('/mahasiswa/add', [
	'uses' => '\App\Http\Controllers\MahasiswaController@addData',
	'as'   => 'tambah.mahasiswa.post',
]);

Route::get('/dosen', [
	'uses' => '\App\Http\Controllers\DosenController@index',
	'as'   => 'dosen',
]);

Route::get('/dosen/add', [
	'uses' => '\App\Http\Controllers\DosenController@create',
	'as'   => 'tambah.dosen',
]);
