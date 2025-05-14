<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\unitkerjasController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\ruangController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/unit-kerjas', [unitKerjasController::class, 'index']);
Route::get('/pegawai', [pegawaiController::class, 'index']);
Route::get('/peminjaman', [peminjamanController::class, 'index']);
Route::get('/ruang', [ruangController::class, 'index']);
