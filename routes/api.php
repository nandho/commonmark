<?php

use App\Http\Controllers\Api\loggeduser;
// use App\Http\Controllers\PmbApiController;
use App\Http\Controllers\test;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
// use App\Http\Controllers\JawabanController;
// use App\Http\Controllers\JurusanController;
// use App\Http\Controllers\NilaiController;
// use App\Http\Controllers\SoalController;
// use App\Http\Controllers\MahasiswaPost;
// use App\Http\Controllers\PostDosen;
// use App\Http\Controllers\Pem_AkademikPost;
// use App\Http\Controllers\Pem_SkripsiPost;
// use App\Http\Controllers\KhsController;
// use App\Http\Controllers\KrsController;
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

/**
 * route "/login"
 * @method "POST"
 */

Route::post('auth/register', RegisterController::class)->name('register');
Route::apiResource('krsmahasiswa', App\Http\Controllers\KrsController::class);
Route::apiResource('khsmahasiswa', App\Http\Controllers\KhsController::class);
Route::apiResource('pmb', App\Http\Controllers\PmbApiController::class);
Route::apiResource('jurusan', App\Http\Controllers\JurusanController::class);
Route::apiResource('ujian', App\Http\Controllers\SoalController::class);
Route::apiResource('pmb/jawaban', App\Http\Controllers\JawabanController::class);
Route::apiResource('hasil_ujian/nilai', App\Http\Controllers\NilaiController::class);
Route::apiResource('mahasiswa', App\Http\Controllers\MahasiswaPost::class);
Route::apiResource('dosen', App\Http\Controllers\PostDosen::class)->middleware('auth:api');
Route::apiResource('pem_akademik', App\Http\Controllers\Pem_AkademikPost::class);
Route::apiResource('pem_skripsi', App\Http\Controllers\Pem_SkripsiPost::class);
Route::apiResource('persyaratan_pmb',App\Http\Controllers\persyaratancontroller::class);
// Route::apiresource('ujian')
// Route::resource('testing2',App\Http\Controllers\testing2::class);

//auth
Route::post('auth/login', LoginController::class)->name('apilogin');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('user/',loggeduser::class)->middleware('auth:api');

Route::post('auth/logout', LogoutController::class)->name('logout');
// Route::apiResource('testing/pmb', PmbApiController::class, ['except' => 'index']);




Route::get('test', [test::class, 'index']);
Route::post('test', [test::class, 'store']);
// Route::apiResource('testing/pmb', PmbApiController::class, ['only' => 'index'])->middleware('auth:api');
// Route::get('/testroute', function () {
//     $password = gpw::generate(8);
//     $name = "FunnyCoder";
//     // The email sending is done using the to method on the Mail facade
//     Mail::to('stryn@gmail.com’')->send(new SendEmailPMB($name, $password, "xxx"));
// });
