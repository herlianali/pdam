<?php

use App\Http\Controllers\JenisPengaduanController;
use App\Http\Controllers\PetugasEntryController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/entryPengaduan', [PetugasEntryController::class, 'index'])->name('entryPengaduan');
Route::get('/jenisPengaduan', [JenisPengaduanController::class, 'index'])->name('jenisPengaduan');
Route::get('tablePegawai', function () {return view('petugasEntry.tablePegawai');});
Route::get('printTest', function() {
    return view('jenisPengaduan.print');
});
