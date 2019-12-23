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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'AdminController@index')->name('beranda-admin')->middleware('auth','role:admin');

Route::get('/petambak', 'PetambakController@index')->name('petambak-index');
Route::get('/petambak-tambah', 'PetambakController@create')->name('petambak-tambah');
Route::post('/petambak-store', 'PetambakController@store')->name('petambak-store');
Route::get('/petambak-show/{id_petambak}', 'PetambakController@show')->name('ptambak-show');
Route::get('/petambak-edit/{id_petambak}', 'PetambakController@edit')->name('petambak-edit')->middleware('auth','role:admin');