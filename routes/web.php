<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisPekerjaanController;
use App\Http\Controllers\JenisPelangganController;
use App\Http\Controllers\JenisPengaduanController;
use App\Http\Controllers\KondisiTutupanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasEntryController;
use App\Http\Controllers\PetugasKhususController;
use App\Http\Controllers\PetugasKontrolController;
use App\Http\Controllers\PetugasKorektorController;
use App\Http\Controllers\petugasPengaduanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('master')->group(function () {
    Route::get('/petugasPengaduan', [petugasPengaduanController::class, 'index'])->name('petugasPengaduan');
    Route::get('/printPengaduan', [JenisPengaduanController::class, 'print'])->name('printPengaduan');
    Route::resource('jenisPengaduan', JenisPengaduanController::class);

    Route::get('/jenisPekerjaan', [JenisPekerjaanController::class, 'index'])->name('jenisPekerjaan');

    Route::get('/petugasKhusus', [PetugasKhususController::class, 'index'])->name('petugasKhusus');

    Route::get('/petugasKontrol', [PetugasKontrolController::class, 'index'])->name('petugasKontrol');

    Route::get('/petugasKorektor', [PetugasKorektorController::class, 'index'])->name('petugasKorektor');

    Route::get('/kondisiTutupan', [KondisiTutupanController::class, 'index'])->name('kondisiTutupan');

    Route::resource('jenisPelanggan', JenisPelangganController::class);
});
