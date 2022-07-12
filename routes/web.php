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
    return view('home');
});

Route::view('/inventory/aset', 'inventori.aset');
Route::view('/inventory/kategori', 'inventori.kategori');
Route::view('/inventory/supplier', 'inventori.supplier');

Route::view('/location/departemen', 'lokasi.departemen');
Route::view('/location/ruangan', 'lokasi.ruangan');

Route::view('/report/pengadaan', 'laporan.pengadaan');
Route::view('/report/penempatan', 'laporan.penempatan');
Route::view('/report/mutasi', 'laporan.mutasi');
Route::view('/report/peminjaman', 'laporan.peminjaman');

Route::view('/pengguna', 'pengguna');

Route::view('/post/add_aset', 'inventori.post.add_aset');
Route::view('/post/add_kategori', 'inventori.post.add_kategori');
Route::view('/post/add_supplier', 'inventori.post.add_supplier');
