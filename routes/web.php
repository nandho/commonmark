<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('login');
Route::get('tes/', function () {
    return view('tes');
});
Route::get('daftar/', function () {
    return view('pendaftaran');
});
Route::get('login/', function () {
    return view('login');
})->name('login');