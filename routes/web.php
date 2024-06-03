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

//----------------URL DOSEN----------------------------
// dosen add
Route::get('/adddosen', function () {
    return view('inputdosen');
});

// dosen daftar
Route::get('/dosen', function () {
    return view('daftardosen');
});
// dosen details
Route::get('/dosen/{id}', function ($id) {
    return view('detailsdosen', ['id' => $id]);
});
// dosen edit
Route::get('/edit-dosen/{id}', function ($id) {
    return view('editdosen', ['id' => $id]);
});

// dosen delete

// -----------------Kurikulum-----------------------------
// kurikulum add
Route::get('/kurikulumadd', function () {
    return view('addkurikulum');
});
// kurikulum daftar
Route::get('/kurikulum', function () {
    return view('kurikulum');
});
// kurikulum details
Route::get('/kurikulum/{id}', function ($id) {
    return view('detailskurikulum', ['id' => $id]);
});
// kurikulum edit
Route::get('/kurikulumedit/{id}', function ($id) {
    return view('editkurikulum', ['id' => $id]);
});
// matkul daftar
Route::get('/matkul', function () {
    return view('matkul');
});
// matkul post
Route::get('/matkuladd', function () {
    return view('addmatkul');
});

// ---------------------Prodi-------------------
// prodi add
Route::get('/prodiadd', function () {
    return view('addprodi');
});

// prodi daftar
Route::get('/prodi', function () {
    return view('prodi');
});
// edit prodi
Route::get('/editprodi/{id}', function ($id) {
    return view('editprodi', ['id' => $id]);
});
// prodi details
Route::get('/detailsprodi/{id}', function ($id) {
    return view('detailsprodi', ['id' => $id]);
});
Route::get('/tes', function () {
    return view('tes');
});
