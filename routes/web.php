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
use App\Http\Controllers\GunaPersilController;
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
   
    Route::get('/jenisPengaduan', [JenisPengaduanController::class, 'index'])->name('jenisPengaduan');
    Route::get('/printPengaduan', [JenisPengaduanController::class, 'print'])->name('printPengaduan');
    Route::delete('/deletejenisPengaduan/{id}',[JenisPengaduanController::class,'destroy']);


    Route::get('/jenisPekerjaan', [JenisPekerjaanController::class, 'index'])->name('jenisPekerjaan');
    Route::get('/printjenisPekerjaan', [JenisPekerjaanController::class, 'print'])->name('printjenisPekerjaan');
    Route::delete('/deletejenisPekerjaan/{id}', [JenisPekerjaanController::class, 'destroy']);

    Route::get('/petugasKhusus', [PetugasKhususController::class, 'index'])->name('petugasKhusus');

    Route::get('/petugasKontrol', [PetugasKontrolController::class, 'index'])->name('petugasKontrol');
    Route::get('/printpetugasKontrol', [PetugasKontrolController::class, 'print'])->name('printpetugasKontrol');
    Route::delete('/deletePetugasKontrol/{id}', [PetugasKontrolController::class, 'destroy']);

    Route::get('/petugasKorektor', [PetugasKorektorController::class, 'index'])->name('petugasKorektor');
    Route::get('/laporanpetugasKorektor',[PetugasKorektorController::class,'laporan'])->name('laporanpetugasKorektor');
    Route::get('/viewsisapetugasKorektor', [PetugasKorektorController::class, 'viewsisa'])->name('viewsisapetugasKorektor');
    Route::get('/randompetugasKorektor', [PetugasKorektorController::class, 'random'])->name('randompetugasKorektor');
    Route::get('/viewptspetugasKorektor', [PetugasKorektorController::class, 'viewpts'])->name('viewptspetugasKorektor');
    Route::get('/monitoringpetugasKorektor', [PetugasKorektorController::class, 'monitoring'])->name('monitoringpetugasKorektor');
    Route::get('/koreksipetugasKorektor', [PetugasKorektorController::class, 'koreksi'])->name('koreksipetugasKorektor');
    

    Route::get('/petugasEntry', [PetugasEntryController::class, 'index'])->name('petugasEntry');
    Route::get('/printpetugasEntry', [PetugasEntryController::class, 'print'])->name('printpetugasEntry');
    Route::delete('/deletepetugasEntry/{id}', [PetugasEntryController::class, 'destroy']);

    
    Route::get('/gunaPersil', [GunaPersilController::class, 'index'])->name('gunaPersil');
    Route::delete('/deletegunaPersil/{id}', [GunaPersilController::class, 'destroy']);
    Route::get('/printgunaPersil',[GunaPersilController::class,'print'])->name('printgunaPersil');
    Route::get('/kondisiTutupan', [KondisiTutupanController::class, 'index'])->name('kondisiTutupan');
    Route::get('/printkondisiTutupan', [KondisiTutupanController::class, 'print'])->name('printkondisiTutupan');
    Route::delete('/deletekondisiTutupan/{id}',[KondisiTutupanController::class, 'destroy']);

    Route::get('/retribusi', [RetribusiController::class, 'index'])->name('retribusi');
    Route::get('/printretribusi', [RetribusiController::class, 'print'])->name('printretribusi');
    Route::delete('/deleteRetribusi/{id}',[RetribusiController::class,'destroy']);

    Route::get('/wilayahDistribusi', [WilayahDistribusiController::class, 'index'])->name('wilayahDistribusi');
    Route::get('/printwilayahDistribusi', [WilayahDistribusiController::class, 'print'])->name('printwilayahDistribusi');
    Route::delete('/deleteWilayahDistribusi/{id}',[WilayahDistribusiController::class,'destroy']);

    Route::get('/statusTanah', [StatusTanahController::class, 'index'])->name('statusTanah');
    Route::get('/printstatusTanah', [StatusTanahController::class, 'print'])->name('printstatusTanah');
    Route::delete('/deleteStatusTanah/{id}',[StatusTanahController::class,'destroy']);

    Route::get('/statusAir', [StatusAirController::class, 'index'])->name('statusAir');
    Route::get('/printstatusAir', [StatusAirController::class, 'print'])->name('printstatusAir');
    Route::delete('/deleteStatusAir/{id}', [StatusAirController::class, 'destroy']);

    Route::get('/statusMeter', [StatusMeterController::class, 'index'])->name('statusMeter');
    Route::get('/printstatusMeter', [StatusMeterController::class, 'print'])->name('printstatusMeter');
    Route::delete('/deleteStatusMeter/{id}', [StatusMeterController::class, 'destroy']);

    Route::get('/merekMeter', [MerekMeterController::class, 'index'])->name('merekMeter');
    Route::get('/printmerekMeter', [MerekMeterController::class, 'print'])->name('printmerekMeter');
    Route::delete('/deleteMerekMeter/{id}', [MerekMeterController::class, 'destroy']);


    Route::get('/materai', [MateraiController::class, 'index'])->name('materai');
    Route::get('/printmaterai', [MateraiController::class, 'print'])->name('printmaterai');
    Route::delete('/deletematerai/{id}', [MateraiController::class, 'destroy']);

    Route::get('/panggilanDinas', [PanggilanDinasController::class, 'index'])->name('panggilanDinas');
    Route::post('/panggilanDinas',[PanggilanDinasController::class,'store']);
    Route::get('/printpanggilanDinas/setting', [PanggilanDinasController::class, 'settingPrint'])->name('settingPrintPanggilan');
    Route::get('/printpanggilanDinas', [PanggilanDinasController::class, 'print'])->name('printpanggilanDinas');
    Route::put('/updatepanggilanDinas.{id}', [PanggilanDinasController::class, 'update']);
    Route::delete('/deletePanggilanDinas/{id}', [PanggilanDinasController::class, 'destroy']);
 
    Route::get('/monitoringPelanggan', [MonitoringPelangganController::class, 'index'])->name('monitoringPelanggan');
    Route::get('/monitoringPelanggan.{id}', [MonitoringPelangganController::class, 'show']);
    Route::delete('/deletemonitoringPelanggan/{id}', [MonitoringPelangganController::class, 'destroy']);
    Route::post('/monitoringPelanggan/filter', [MonitoringPelangganController::class, 'filter']);

    Route::get('/penetapanTeraMeter', [PenetapanTeraMeterController::class, 'index'])->name('penetapanTeraMeter');
    Route::get('/printpenetapanTeraMeter', [PenetapanTeraMeterController::class, 'print'])->name('printpenetapanTeraMeter');
    

    Route::get('/insertPosisiMeter', [InsertPosisiMeterController::class, 'index'])->name('insertPosisiMeter');

    Route::get('/surveyTarif', [SurveyTarifController::class, 'index'])->name('surveyTarif');
    Route::get('/cetaksurvey', [SurveyTarifController::class, 'cetaksurvey'])->name('cetaksurvey');
    Route::get('/dataKosong', [SurveyTarifController::class, 'datakosong'])->name('dataKosong');
    Route::get('/cetakdk', [SurveyTarifController::class, 'cetakdk'])->name('cetakdk');
    Route::get('/lebihentri', [SurveyTarifController::class, 'lebihentri'])->name('lebihentri');
    Route::get('/cetaklebihentri', [SurveyTarifController::class, 'cetaklebihentri'])->name('cetaklebihentri');

    Route::get('/printsurveyTarif', [SurveyTarifController::class, 'print'])->name('printsurveyTarif');
    Route::get('/createsurveyTarif', [SurveyTarifController::class, 'create'])->name('createsurveyTarif');
    
    Route::get('/cekSurveyTarif',  [CekSurveyTarifController::class,'index'])->name('cekSurveyTarif');

    Route::get('/telponPelanggan',  [TelponPelangganController::class,'index'])->name('telponPelanggan');
   
    Route::resource('jenisPelanggan', JenisPelangganController::class);

    Route::get('/mlnCode', [ MLNCodeController::class,'index'])->name('mlnCode');

    Route::get('/pelangganMeterC', [ PelangganMeterCController::class, 'index'])->name('pelangganMeterC');

});