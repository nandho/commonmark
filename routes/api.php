<?php

use App\Http\Controllers\PmbApiController;
use App\Http\Controllers\test;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\MahasiswaPost;
use App\Http\Controllers\PostDosen;
use App\Http\Controllers\Pem_AkademikPost;
use App\Http\Controllers\Pem_SkripsiPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//testing email
use App\Mail\SendEmailPMB;
use Illuminate\Support\Facades\Mail;
use App\Services\GeneratingPassword as gpw;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * route "/register"
 * @method "POST"
 */
Route::post('auth/register', RegisterController::class)->name('register');

/**
 * route "/login"
 * @method "POST"
 */

Route::resource('pmb', PmbApiController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('ujian', SoalController::class);
Route::resource('pmb/jawaban', JawabanController::class);
Route::resource('hasil_ujian/nilai', NilaiController::class);
Route::resource('mhs',MahasiswaPost::class);
Route::resource('dosen',PostDosen::class);
Route::resource('pem_akademik',Pem_AkademikPost::class);
Route::resource('pem_skripsi',Pem_SkripsiPost::class);
// Route::resource('ujian');

//auth
Route::post('auth/login', LoginController::class)->name('login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/logout', LogoutController::class)->name('logout');

Route::get('test', [test::class, 'index']);
Route::post('test', [test::class, 'store']);

Route::get('/testroute', function () {
    $password = gpw::generate(8);
    $name = "FunnyCoder";

    // The email sending is done using the to method on the Mail facade
    Mail::to('stryn@gmail.com’')->send(new SendEmailPMB($name, $password,"xxx"));
});
