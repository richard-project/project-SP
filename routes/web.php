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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'index'],function(){
	Route::get('/', 'IndexController@index');
	Route::get('/cetak_surat', 'IndexController@cetak');
	Route::post('/cetakpdf','IndexController@cetakpdf');
});



Route::group(['prefix' => 'sign'],function(){
	Route::get('/up', 'SignController@up');
	Route::get('/in', 'SignController@in');
	Route::get('/table', 'SignController@table');
	Route::get('/element', 'SignController@element');
	Route::get('/button', 'SignController@button');
	Route::get('/tabs', 'SignController@tabs');
	Route::get('/logo', 'SignController@logo');
	Route::get('/chart', 'SignController@chart');
	Route::get('/maps', 'SignController@maps');
});
