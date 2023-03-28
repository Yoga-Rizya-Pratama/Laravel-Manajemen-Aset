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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

// Route::get('/operator', 'OperatorController@index'); //operator

// Route::get('/protected', 'ProtectedController@index')->middleware('auth');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/konfirmasi/{id}', 'AdminController@konfirmasi');
Route::get('/admin/hapus/{id}', 'AdminController@hapus');

//asset
Route::get('/asset', 'AssetController@index');
Route::post('/asset/tambah', 'AssetController@tambah');
Route::get('/asset/hapus/{id}', 'AssetController@hapus');
Route::get('/asset/cari', 'AssetController@cari');
Route::get('/asset/edit/{id}', 'AssetController@edit');
Route::patch('/asset/edit/proses/{id}', 'AssetController@editProses');
//bidang
Route::get('/bidang', 'BidangController@index');
Route::get('/bidang/tambah', 'BidangController@tambah');
Route::post('/bidang/tambah/proses', 'BidangController@proses');

//user
Route::get('/user', 'UsersController@index');

//confirmasi
Route::get('/konfirmasi', 'ConfirmationController@index');


//Laporan
Route::get('/laporan', 'LaporanController@index');
Route::get('/laporan/proses', 'LaporanController@proses');
