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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pelayanan', 'Pelayanan@index')->name('home');
Route::get('/pengaduan', 'Pengaduan@post');
Route::get('/download','Pelayanan@excel');
Route::get('/download','Pengaduan@excel');

