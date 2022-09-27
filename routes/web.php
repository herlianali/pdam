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
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\RiwayatPemakaianController;
use App\Http\Controllers\InformasiPelunasanRekeningController;
use App\Http\Controllers\monitoringGunaPersilController;
use App\Http\Controllers\historiMutasiController;
use App\Http\Controllers\monitoringBAMutasiKolektifController;
use App\Http\Controllers\cetakBAPeroranganController;
use App\Http\Controllers\laporanRekapitulasiPerubahanTarifController;
use App\Http\Controllers\LaporanTarifPerBendelController;
use App\Http\Controllers\LaporanRekapitulasiNaikTurunController;
use App\Http\Controllers\LaporanPerubahanTNTperBulanController;
use App\Http\Controllers\monitoringBAMutasiPeroranganController;
use App\Http\Controllers\mutasiKolektifController;
use App\Http\Controllers\SuratPemberitahuanController;

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


Route::prefix('pengaduan')->group(function () { 
    Route::get('/pengaduan', [ PengaduanController::class, 'index'])->name('pengaduan');
    Route::get('/detailpengaduan', [ PengaduanController::class, 'detail'])->name('detailpengaduan');
    Route::get('/editpengaduan', [ PengaduanController::class, 'edit'])->name('editpengaduan');
    Route::get('/tambahpengaduan', [ PengaduanController::class, 'create'])->name('tambahpengaduan');
    Route::get('/pengaduan/printbonc',[ PengaduanController::class,'printbonc'])->name('printbonc');
    Route::get('/pengaduan/printbonp',[ PengaduanController::class,'printbonp'])->name('printbonp');
    Route::get('/informasiPelunasanRekening', [ InformasiPelunasanRekeningController::class, 'index'])->name('informasiPelunasanRekening');
    Route::get('/printinformasiPelunasanRekening', [ InformasiPelunasanRekeningController::class, 'print'])->name('printinformasiPelunasanRekening');
    Route::get('/riwayatPemakaian', [ RiwayatPemakaianController::class, 'index'])->name('riwayatPemakaian');
    Route::get('/kartuPelanggan', [ RiwayatPemakaianController::class, 'kartuPelanggan'])->name('kartuPelanggan');
    Route::get('/infoPelanggaran', [ RiwayatPemakaianController::class, 'infoPelanggaran'])->name('infoPelanggaran');
    Route::get('/pelanggaran', [ RiwayatPemakaianController::class, 'pelanggaran'])->name('pelanggaran');

});

Route::prefix('BAMutasiPelanggan')->group(function () { 
    Route::get('/monitoringGunaPersil', [ monitoringGunaPersilController::class, 'index'])->name('monitoringGunaPersil');
    Route::get('/printmonitoringGunaPersil', [ monitoringGunaPersilController::class, 'print'])->name('printmonitoringGunaPersil');

    Route::get('/historiMutasi', [ historiMutasiController::class, 'index'])->name('historiMutasi');

    
    Route::get('/monitoringBAMutasiKolektif', [ monitoringBAMutasiKolektifController::class, 'index'])->name('monitoringBAMutasiKolektif');
    Route::get('/previewmonitoringBAMutasiKolektif', [ monitoringBAMutasiKolektifController::class, 'preview'])->name('previewmonitoringBAMutasiKolektif');
    Route::get('/persetujuan', [ monitoringBAMutasiKolektifController::class, 'persetujuan'])->name('persetujuan');
    Route::get('/pdinasmonitoringBAMutasiKolektif', [ monitoringBAMutasiKolektifController::class, 'pdinas'])->name('pdinasmonitoringBAMutasiKolektif');
    Route::get('/createmonitoringBAMutasiKolektif', [ monitoringBAMutasiKolektifController::class, 'create'])->name('createmonitoringBAMutasiKolektif');
    Route::get('/cetakUsulanmonitoringBAMutasiKolektif', [ monitoringBAMutasiKolektifController::class, 'cetakusulan'])->name('cetakUsulanmonitoringBAMutasiKolektif');
    Route::get('/cetakLampiranmonitoringBAMutasiKolektif', [ monitoringBAMutasiKolektifController::class, 'cetaklampiran'])->name('cetakLampiranmonitoringBAMutasiKolektif');
    
    
    
    Route::get('/mutasiKolektif', [ mutasiKolektifController::class, 'index'])->name('mutasiKolektif');
    Route::get('/cetakBA', [ mutasiKolektifController::class, 'cetakBA'])->name('cetakBA');
    Route::get('/cetakLampiran', [ mutasiKolektifController::class, 'cetakLampiran'])->name('cetakLampiran');

    Route::get('/monitoringBAMutasiPerorangan', [ monitoringBAMutasiPeroranganController::class, 'index'])->name('monitoringBAMutasiPerorangan');
    Route::get('/createmonitoringBAMutasiPerorangan', [ monitoringBAMutasiPeroranganController::class, 'create'])->name('createmonitoringBAMutasiPerorangan');
    Route::get('/editmonitoringBAMutasiPerorangan', [ monitoringBAMutasiPeroranganController::class, 'edit'])->name('editmonitoringBAMutasiPerorangan');
    Route::get('/persetujuanmonitoringBAMutasiPerorangan', [ monitoringBAMutasiPeroranganController::class, 'persetujuan'])->name('persetujuanmonitoringBAMutasiPerorangan');
    Route::get('/cetakBA', [ monitoringBAMutasiPeroranganController::class, 'cetakBA'])->name('cetakBA');
    Route::get('/panggilanDinas', [ monitoringBAMutasiPeroranganController::class, 'panggilanDinas'])->name('panggilanDinas');
    Route::get('/cetakBATarif', [ monitoringBAMutasiPeroranganController::class, 'cetakBATarif'])->name('cetakBATarif');
    Route::get('/cetakUsulan', [ monitoringBAMutasiPeroranganController::class, 'cetakUsulan'])->name('cetakUsulan');
    Route::get('/cetakPenolakanUsulan', [ monitoringBAMutasiPeroranganController::class, 'cetakPenolakanUsulan'])->name('cetakPenolakanUsulan');
    
    

    Route::get('/laporanTarifPerBendel', [ LaporanTarifPerBendelController::class, 'index'])->name('laporanTarifPerBendel');
    
    Route::get('/laporanPerubahanTNTperBulan', [ LaporanPerubahanTNTperBulanController::class, 'index'])->name('laporanPerubahanTNTperBulan');
    Route::get('/printlaporanPerubahanTNTperBulan', [ LaporanPerubahanTNTperBulanController::class, 'print'])->name('printlaporanPerubahanTNTperBulan');

    Route::get('/laporanRekapitulasiNaikTurun', [ LaporanRekapitulasiNaikTurunController::class, 'index'])->name('laporanRekapitulasiNaikTurun');
    Route::get('/printlaporanRekapitulasiNaikTurun', [ LaporanRekapitulasiNaikTurunController::class, 'print'])->name('printlaporanRekapitulasiNaikTurun');

    Route::get('/laporanRekapitulasiPerubahanTarif', [ laporanRekapitulasiPerubahanTarifController::class, 'index'])->name('laporanRekapitulasiPerubahanTarif');
    Route::get('/previewlaporanRekapitulasiPerubahanTarif', [ laporanRekapitulasiPerubahanTarifController::class, 'preview'])->name('previewlaporanRekapitulasiPerubahanTarif');

    Route::get('/indexcetakBAPerorangan', [ cetakBAPeroranganController::class, 'index'])->name('cetakBAPerorangan');

    
    Route::get('/entriSurat', [ SuratPemberitahuanController::class, 'entriSurat'])->name('entriSurat');

});