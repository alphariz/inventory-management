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

Route::view('/inventory/asset', 'inventory.asset');
Route::view('/inventory/category', 'inventory.category');
Route::view('/inventory/supplier', 'inventory.supplier');

Route::view('/location/departement', 'location.departement');
Route::view('/location/rooms', 'location.rooms');
