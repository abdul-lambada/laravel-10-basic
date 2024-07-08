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
});

//membuat route terbaru dengan get tanpa view
Route::get('halo', function () {
    return "Hallo, Selamat Datang di Laravel 10";
});

// Route get dengan view
Route::get('blog', function() {
    return view('blog');
});

//Route dengan controller
Route::get('dosen', [App\Http\Controllers\DosenController::class, 'index']);

//Route Pegawai dengan Index
Route::get('/pegawai/{nama}', [\App\Http\Controllers\PegawaiController::class, 'index']);

//Route baru dengan get dan post
Route::get('/formulir', [\App\Http\Controllers\PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [\App\Http\Controllers\PegawaiController::class, 'proses']);
