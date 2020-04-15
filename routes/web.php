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

Route::get('/formulir','PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

//ROUTE CRUD===============================================
//menampilkan data dari database---------------------------
Route::get('/pegawai','PegawaiController@index');

//menambahkan data ke database-----------------------------
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

//mengedit data yang ada pada database---------------------
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
//Route::resource('tblpegawai','PegawaiController@edit');

//menghapus data yang ada pada database--------------------
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');