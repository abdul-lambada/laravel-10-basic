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
// Route::get('blog', function() {
//     return view('blog');
// });

//Route dengan controller
Route::get('dosen', [App\Http\Controllers\DosenController::class, 'index']);

//Route Pegawai dengan Index
// Route::get('/pegawai/{nama}', [\App\Http\Controllers\PegawaiController::class, 'index']);

//Route baru dengan get dan post
Route::get('/formulir', [\App\Http\Controllers\PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [\App\Http\Controllers\PegawaiController::class, 'proses']);

//Route Blog
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'home']);
Route::get('/blog/tentang', [App\Http\Controllers\BlogController::class, 'tentang']);
Route::get('/blog/kontak', [App\Http\Controllers\BlogController::class, 'kontak']);

//Route CRUD
Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index']);
Route::get('/pegawai/cari', [App\Http\Controllers\PegawaiController::class, 'cari']);
Route::get('/pegawai/tambah', [App\Http\Controllers\PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [App\Http\Controllers\PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [App\Http\Controllers\PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [App\Http\Controllers\PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [App\Http\Controllers\PegawaiController::class, 'hapus']);

//Route Validation
Route::get('/input', [\App\Http\Controllers\BuruhController::class, 'input']);
Route::post('/proses', [\App\Http\Controllers\BuruhController::class, 'proses']);


//Route Karyawan
Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index']);

//Route CRUD Eloquent
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index']);
Route::get('/staff/tambah', [App\Http\Controllers\StaffController::class, 'tambah']);
Route::post('/staff/store', [App\Http\Controllers\StaffController::class, 'store']);
Route::get('/staff/edit/{id}', [App\Http\Controllers\StaffController::class, 'edit']);
Route::put('/staff/update/{id}', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/staff/hapus/{id}', [App\Http\Controllers\StaffController::class, 'hapus']);
