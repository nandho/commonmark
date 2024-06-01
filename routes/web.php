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


Route::get('dashboard', function () {
    return view('all.dashboard'); // TODO return index dengan authorization berisikan KRS, KHS, disini terdapat 5 user
});

Route::get('biodata/', function () {
    return view('biodata');
});

Route::get('biodataedit/', function () {
    return view('biodataedit');
});

Route::get('soal/', function () {
    return view('soal');
});

// Rute untuk menampilkan daftar semua semester
Route::get('/semester', function () {
    return view('daftar_semester');
});

// Rute untuk menampilkan detail semester berdasarkan ID
Route::get('/semester/{id}', function ($id) {
    return view('semester_detail', ['id' => $id]);
});
Route::get('/addsemster', function () {
    return view('addsemester');
});

// dosen
Route::get('/adddosen', function () {
    return view('inputdosen');
});

// dosen
Route::get('/dosen', function () {
    return view('daftardosen');
});
Route::get('/dosen/{id}', function ($id) {
    return view('detailsdosen', ['id' => $id]);
});

Route::get('/tes', function () {
    return view('tes');
});