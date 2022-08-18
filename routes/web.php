<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisPekerjaanController;
use App\Http\Controllers\JenisPelangganController;
use App\Http\Controllers\JenisPengaduanController;
use App\Http\Controllers\KondisiTutupanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateraiController;
use App\Http\Controllers\MerekMeterController;
use App\Http\Controllers\PanggilanDinasController;
use App\Http\Controllers\PetugasEntryController;
use App\Http\Controllers\PetugasKhususController;
use App\Http\Controllers\PetugasKontrolController;
use App\Http\Controllers\PetugasKorektorController;
use App\Http\Controllers\petugasPengaduanController;
use App\Http\Controllers\RetribusiController;
use App\Http\Controllers\StatusAirController;
use App\Http\Controllers\StatusMeterController;
use App\Http\Controllers\StatusTanahController;
use App\Http\Controllers\WilayahDistribusiController;
use App\Http\Controllers\TelponPelangganController;
use App\Http\Controllers\MLNCodeController;
use App\Http\Controllers\PelangganMeterCController;
use App\Http\Controllers\MonitoringPelangganController;
use App\Http\Controllers\PenetapanTeraMeterController;
use App\Http\Controllers\CekSurveyTarifController;
use App\Http\Controllers\InsertPosisiMeterController;
use App\Http\Controllers\SurveyTarifController;
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

    Route::get('/petugasEntry', [PetugasEntryController::class, 'index'])->name('petugasEntry');

    Route::get('/kondisiTutupan', [KondisiTutupanController::class, 'index'])->name('kondisiTutupan');

    Route::get('/retribusi', [RetribusiController::class, 'index'])->name('retribusi');

    Route::get('/wilayahDistribusi', [WilayahDistribusiController::class, 'index'])->name('wilayahDistribusi');

    Route::get('/statusTanah', [StatusTanahController::class, 'index'])->name('statusTanah');

    Route::get('/statusAir', [StatusAirController::class, 'index'])->name('statusAir');

    Route::get('/statusMeter', [StatusMeterController::class, 'index'])->name('statusMeter');

    Route::get('/merekMeter', [MerekMeterController::class, 'index'])->name('merekMeter');

    Route::get('/materai', [MateraiController::class, 'index'])->name('materai');

    Route::get('/panggilanDinas', [PanggilanDinasController::class, 'index'])->name('panggilanDinas');
 
    Route::get('/monitoringPelanggan', [MonitoringPelangganController::class, 'index'])->name('monitoringPelanggan');

    Route::get('/penetapanTeraMeter', [PenetapanTeraMeterController::class, 'index'])->name('penetapanTeraMeter');

    Route::get('/insertPosisiMeter', [InsertPosisiMeterController::class, 'index'])->name('insertPosisiMeter');

    Route::get('/surveyTarif', [SurveyTarifController::class, 'index'])->name('surveyTarif');
    
    Route::resource('cekSurveyTarif',  CekSurveyTarifController::class);

    Route::resource('telponPelanggan',  TelponPelangganController::class);
   
    Route::resource('jenisPelanggan', JenisPelangganController::class);

    Route::resource('mlnCode',  MLNCodeController::class);

    Route::resource('pelangganMeterC',  PelangganMeterCController::class);

});
