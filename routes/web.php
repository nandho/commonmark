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

<<<<<<< HEAD
Route::get('dashboard',function () {
    return view('all.dashboard'); // TODO return index dengan authorization berisikan KRS, KHS, disini terdapat 5 user
});
=======
Route::get('datadiri/', function () {
    return view('datadiri');
});
>>>>>>> 10d0212 (Update WSL FE datadiri)
