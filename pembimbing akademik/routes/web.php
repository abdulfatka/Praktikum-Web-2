<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdibdController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProdisiController;
use App\Http\Controllers\ProditiController;
use App\Http\Controllers\ProfildosenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RombonganBelajarController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\VisimisiController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// routes/web.php
Route::get('tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('team', [TeamController::class, 'index'])->name('team');
Route::get('profildosen', [ProfildosenController::class, 'index'])->name('profildosen');
Route::get('visimisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::get('proditi', [ProditiController::class, 'index'])->name('proditi');
Route::get('prodisi', [ProdisiController::class, 'index'])->name('prodisi');
Route::get('prodibd', [ProdibdController::class, 'index'])->name('prodibd');




Route::middleware(['auth','admin:administrator'])->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/prodi', [ProdiController::class, 'index'])->name('prodis.index');
Route::get('/admin/prodicreate', [ProdiController::class, 'create'])->name('.create');
Route::post('/admin/prodistore', [ProdiController::class, 'store'])->name('dosens.store');
Route::get('/admin/prodi{prodi}', [ProdiController::class, 'show'])->name('prodis.show');
Route::get('admin/prodi{prodi}/edit', [ProdiController::class, 'edit'])->name('prodis.edit');
Route::put('/admin/prodi{prodi}', [ProdiController::class, 'update'])->name('prodis.update');
Route::delete('/admin/prodi{prodi}', [ProdiController::class, 'destroy'])->name('prodis.destroy');

Route::get('/admin/dosen', [DosenController::class, 'index'])->name('dosens.index');
Route::get('/admin/dosen/create', [DosenController::class, 'create'])->name('dosens.create');
Route::post('/admin/dosen/store', [DosenController::class, 'store'])->name('dosens.store');
Route::get('/admin/dosen/{dosen}', [DosenController::class, 'show'])->name('dosens.show');
Route::get('admin/dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
Route::put('/admin/dosen/{dosen}', [DosenController::class, 'update'])->name('dosens.update');
Route::delete('/admin/dosen/{dosen}', [DosenController::class, 'destroy'])->name('dosens.destroy');

Route::get('/admin/rombongan_belajar', [RombonganBelajarController::class, 'index'])->name('rombongan_belajars.index');
Route::get('/admin/rombongan_belajar/create', [RombonganBelajarController::class, 'create'])->name('rombongan_belajars.create');
Route::post('/admin/rombongan_belajar/store', [RombonganBelajarController::class, 'store'])->name('rombongan_belajars.store');
Route::get('/admin/rombongan_belajar/{rombongan_belajar}', [RombonganBelajarController::class, 'show'])->name('rombongan_belajars.show');
Route::get('admin/rombongan_belajar/{rombongan_belajar}/edit', [RombonganBelajarController::class, 'edit'])->name('rombongan_belajars.edit');
Route::put('/admin/rombongan_belajar/{rombongan_belajar}', [RombonganBelajarController::class, 'update'])->name('rombongan_belajars.update');
Route::delete('/admin/rombongan_belajar/{rombongan_belajar}', [RombonganBelajarController::class, 'destroy'])->name('rombongan_belajars.destroy');

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
Route::get('/admin/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/admin/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
Route::get('admin/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
Route::put('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
Route::delete('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
});

