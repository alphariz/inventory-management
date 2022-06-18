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

Route::view('/aset', 'inventori.aset');
Route::view('/kategori', 'inventori.kategori');
Route::view('/supplier', 'inventori.supplier');

Route::view('/departemen', 'lokasi.departemen');
Route::view('/ruangan', 'lokasi.ruangan');

Route::view('/pengadaan', 'laporan.pengadaan');
Route::view('/penempatan', 'laporan.penempatan');
Route::view('/mutasi', 'laporan.mutasi');
Route::view('/peminjaman', 'laporan.peminjaman');

Route::view('/pengguna', 'pengguna');
