<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisPekerjaanController;
use App\Http\Controllers\JenisPelangganController;
use App\Http\Controllers\JenisPengaduanController;
use App\Http\Controllers\MateraiController;
use App\Http\Controllers\MerekMeterController;
use App\Http\Controllers\PanggilanDinasController;
use App\Http\Controllers\PetugasEntryController;
use App\Http\Controllers\PetugasKhususController;
use App\Http\Controllers\PetugasKontrolController;
use App\Http\Controllers\PetugasKorektorController;
use App\Http\Controllers\PetugasPengaduanController;
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
use App\Http\Controllers\CetakBAPeroranganController;
use App\Http\Controllers\InsertPosisiMeterController;
use App\Http\Controllers\SurveyTarifController;
use App\Http\Controllers\GunaPersilController;
use App\Http\Controllers\HistoriMutasiController;
use App\Http\Controllers\InformasiPelunasanRekeningController;
use App\Http\Controllers\LaporanRekapitulasiNaikTurunController;
use App\Http\Controllers\KondisiTutupanController;
use App\Http\Controllers\LaporanPerubahanTNTperBulanController;
use App\Http\Controllers\LaporanRekapitulasiPerubahanTarifController;
use App\Http\Controllers\LaporanTarifPerBendelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonitoringBAMutasiKolektifController;
use App\Http\Controllers\MonitoringBAMutasiPeroranganController;
use App\Http\Controllers\MonitoringGunaPersilController;
use App\Http\Controllers\MutasiKolektifController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RiwayatPemakaianController;
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

    Route::resource('petugasPengaduan', PetugasPengaduanController::class)->parameters(['petugasPengaduan' => 'kd_ptgcs'])->except(['create','edit']);

    Route::resource('jenisPengaduan', JenisPengaduanController::class)->parameters(['jenisPengaduan' => 'jns_pengaduan'])->except(['create','edit']);
    Route::get('/printPengaduan', [JenisPengaduanController::class, 'print'])->name('printPengaduan');

    Route::resource('jenisPelanggan', JenisPelangganController::class)->parameters(['jenisPelanggan' => 'jns_pelanggan'])->except(['create','edit']);
    Route::get('/petugasKhusus', [PetugasKhususController::class, 'index'])->name('petugasKhusus');
    Route::post('/petugasKhusus', [PetugasKhususController::class, 'store'])->name('petugasKhusus.store');

    Route::resource('petugasKontrol', PetugasKontrolController::class)->parameters(['petugasKontrol' => 'kd_ptgktrl'])->except(['create','edit']);
    Route::get('/printpetugasKontrol', [PetugasKontrolController::class, 'print'])->name('printpetugasKontrol');
    // Route::delete('/deletePetugasKontrol/{id}', [PetugasKontrolController::class, 'destroy']);

    Route::resource('jenisPekerjaan', JenisPekerjaanController::class)->parameters(['jenisPekerjaan' => 'jns_pekerjaan'])->except(['create','edit']);
    Route::get('/printjenisPekerjaan', [JenisPekerjaanController::class, 'print'])->name('printjenisPekerjaan');
    // Route::delete('/deletejenisPekerjaan/{id}', [JenisPekerjaanController::class, 'destroy']);

    Route::resource('kondisiTutupan', KondisiTutupanController::class)->parameters(['kondisiTutupan' => 'kd_kondisi'])->except(['create','edit']);
    Route::get('/printkondisiTutupan', [KondisiTutupanController::class, 'print'])->name('printkondisiTutupan');

    Route::get('/petugasKorektor', [PetugasKorektorController::class, 'index'])->name('petugasKorektor');
    Route::get('/laporanpetugasKorektor',[PetugasKorektorController::class,'laporan'])->name('laporanpetugasKorektor');
    Route::get('/viewsisapetugasKorektor', [PetugasKorektorController::class, 'viewsisa'])->name('viewsisapetugasKorektor');
    Route::get('/randompetugasKorektor', [PetugasKorektorController::class, 'random'])->name('randompetugasKorektor');
    Route::get('/viewptspetugasKorektor', [PetugasKorektorController::class, 'viewpts'])->name('viewptspetugasKorektor');
    Route::get('/monitoringpetugasKorektor', [PetugasKorektorController::class, 'monitoring'])->name('monitoringpetugasKorektor');
    Route::get('/koreksipetugasKorektor', [PetugasKorektorController::class, 'koreksi'])->name('koreksipetugasKorektor');

    Route::resource('petugasEntry', PetugasEntryController::class)->parameters(['petugasEntry' => 'kd_ptgentry'])->except(['create','edit']);
    Route::get('/printpetugasEntry', [PetugasEntryController::class, 'print'])->name('printpetugasEntry');
    // Route::delete('/deletepetugasEntry/{id}', [PetugasEntryController::class, 'destroy']);

    Route::get('/gunaPersil', [GunaPersilController::class, 'index'])->name('gunaPersil');
    Route::delete('/deletegunaPersil/{id}', [GunaPersilController::class, 'destroy']);
    Route::get('/printgunaPersil',[GunaPersilController::class,'print'])->name('printgunaPersil');


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

    Route::get('/mlnCode', [ MLNCodeController::class,'index'])->name('mlnCode');

    Route::get('/pelangganMeterC', [ PelangganMeterCController::class, 'index'])->name('pelangganMeterC');

    Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
    Route::get('riwayatPemakaian', [RiwayatPemakaianController::class, 'index'])->name('riwayatPemakaian');
    Route::get('informasiPelunasanRekening', [InformasiPelunasanRekeningController::class, 'index'])->name('informasiPelunasanRekening');
    Route::get('monitoringGunaPersil', [MonitoringGunaPersilController::class, 'index'])->name('monitoringGunaPersil');
    Route::get('historiMutasi', [HistoriMutasiController::class, 'index'])->name('historiMutasi');
    Route::get('monitoringBAMutasiKolektif', [MonitoringBAMutasiKolektifController::class, 'index'])->name('monitoringBAMutasiKolektif');
    Route::get('monitoringBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'index'])->name('monitoringBAMutasiPerorangan');
    Route::get('mutasiKolektif', [MutasiKolektifController::class, 'index'])->name('mutasiKolektif');
    Route::get('laporanRekapitulasiPerubahanTarif', [LaporanRekapitulasiPerubahanTarifController::class, 'index'])->name('laporanRekapitulasiPerubahanTarif');
    Route::get('laporanPerubahanTNTperBulan', [LaporanPerubahanTNTperBulanController::class, 'index'])->name('laporanPerubahanTNTperBulan');
    Route::get('laporanRekapitulasiNaikTurun', [LaporanRekapitulasiNaikTurunController::class, 'index'])->name('laporanRekapitulasiNaikTurun');
    Route::get('laporanTarifPerBendel', [LaporanTarifPerBendelController::class, 'index'])->name('laporanTarifPerBendel');
    Route::get('cetakBAPerorangan', [CetakBAPeroranganController::class, 'index'])->name('cetakBAPerorangan');
    // Route::get('cetakBAPerorangan', [CetakBAPeroranganController::class, 'index'])->name('cetakBAPerorangan');
});
