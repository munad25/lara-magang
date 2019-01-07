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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('mahasiswa', "MahasiswaController");

Route::get('/index-mahasiswa', 'MahasiswaController@index')->name('mahasiswa-index');
Route::get('/create-mahasiswa', 'MahasiswaController@create')->name('mahasiswa-create');
Route::get('/edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa-edit');
Route::get('/delete-mahasiswa/{id}', 'MahasiswaController@delete')->name('mahasiswa-delete');
Route::post('/store-mahasiswa', 'MahasiswaController@store')->name('mahasiswa-store');
Route::post('/update-mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa-update');

// Route::get('/url', 'controller@method')->name('route');





