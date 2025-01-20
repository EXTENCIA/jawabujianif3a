<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::post('/peminjaman/simpan', [PeminjamanController::class, 'store'])->name('peminjaman.simpan');
Route::get('/peminjaman/tampilan', [PeminjamanController::class, 'tampilan'])->name('tampilan');

Route::get('/anggota', [AnggotaController::class, 'inputAnggota'])->name('anggota');
Route::post('/anggota', [AnggotaController::class, 'simpanAnggota'])->name('anggota.simapn');
Route::get('/anggota/tampilan', [AnggotaController::class, 'tampilanAnggota'])->name('tampilanAnggota');

Route::get('/buku', [BukuController::class, 'inputBuku'])->name('buku');
Route::post('/buku', [BukuController::class, 'simpanBuku'])->name('buku.simpan');
Route::get('/buku/tampilan', [BukuController::class, 'tampilanBuku'])->name('tampilanBuku');
