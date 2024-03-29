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
use App\Http\Controllers\SuratPemberitahuanController;
use App\Http\Controllers\UsulanMutasiTarifController;
use App\Http\Controllers\DipController;
use App\Models\HistoriMutasi;
use App\Models\LaporanTarifPerBendel;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'loginUser'])->name('login');
Route::get('/csrf', function (){echo csrf_token();});
Route::get('/logout', [LoginController::class, 'logoutUser'])->name('logout');
Route::get('dip/{nip}', [DipController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('master')->group(function () {

    Route::resource('petugasPengaduan', PetugasPengaduanController::class)->parameters(['petugasPengaduan' => 'kd_ptgcs'])->except(['create','edit']);

    Route::resource('jenisPengaduan', JenisPengaduanController::class)->parameters(['jenisPengaduan' => 'jns_pengaduan'])->except(['create','edit']);
    Route::post('/printPengaduan', [JenisPengaduanController::class, 'preview'])->name('printPengaduan');
    Route::post('/cetakPengaduan', [JenisPengaduanController::class, 'cetak'])->name('cetakPengaduan');

    Route::resource('jenisPelanggan', JenisPelangganController::class)->parameters(['jenisPelanggan' => 'jns_pelanggan'])->except(['create','edit']);
    Route::get('/printjenisPelanggan', [JenisPelangganController::class, 'print'])->name('printjenisPelanggan');
    Route::post('/cetakjenisPelanggan', [JenisPelangganController::class, 'cetak'])->name('cetakjenisPelanggan');

    Route::resource('petugasKhusus', PetugasKhususController::class)->parameters(['petugasKhusus' => 'nip'])->except(['create','edit']);
    // Route::get('/petugasKhusus', [PetugasKhususController::class, 'index'])->name('petugasKhusus');
    // Route::get('/petugasKhusus{nip}', [PetugasKhususController::class, 'show'])->name('petugasKhusus.edit');
    // Route::post('/petugasKhusus', [PetugasKhususController::class, 'store'])->name('petugasKhusus.store');

    Route::resource('petugasKontrol', PetugasKontrolController::class)->parameters(['petugasKontrol' => 'kd_ptgktrl'])->except(['create','edit']);
    Route::post('/printpetugasKontrol', [PetugasKontrolController::class, 'print'])->name('printpetugasKontrol');
    Route::post('/cetakpetugasKontrol', [PetugasKontrolController::class, 'cetak'])->name('cetakpetugasKontrol');
    // Route::delete('/deletePetugasKontrol/{id}', [PetugasKontrolController::class, 'destroy']);

    Route::resource('jenisPekerjaan', JenisPekerjaanController::class)->parameters(['jenisPekerjaan' => 'jns_pekerjaan'])->except(['create','edit']);
    Route::post('/printjenisPekerjaan', [JenisPekerjaanController::class, 'printPreview'])->name('printjenisPekerjaan');
    Route::get('/showPrint', [JenisPekerjaanController::class, 'showPrint'])->name('showPrint');
    Route::post('/cetakPekerjaan', [JenisPekerjaanController::class, 'cetak'])->name('cetakPekerjaan');

    // Route::delete('/deletejenisPekerjaan/{id}', [JenisPekerjaanController::class, 'destroy']);

    Route::resource('kondisiTutupan', KondisiTutupanController::class)->parameters(['kondisiTutupan' => 'kd_kondisi'])->except(['create','edit']);
    Route::get('/printkondisiTutupan', [KondisiTutupanController::class, 'print'])->name('printkondisiTutupan');
    Route::post('/cetakkondisiTutupan', [KondisiTutupanController::class, 'cetak'])->name('cetakkondisiTutupan');


    Route::resource('petugasKorektor', PetugasKorektorController::class)->parameters(['petugasKorektor' => 'nip'])->except(['create','edit']);
    // Route::get('/petugasKorektor', [PetugasKorektorController::class, 'index'])->name('petugasKorektor');
    Route::get('/laporanpetugasKorektor',[PetugasKorektorController::class,'laporan'])->name('laporanpetugasKorektor');
    Route::get('/tampillaporanpetugasKorektor',[PetugasKorektorController::class,'tampillaporan'])->name('tampillaporanpetugasKorektor');
    Route::get('/laporanperpetugas',[PetugasKorektorController::class,'laporanperpetugas'])->name('laporanperpetugas');
    Route::get('/laporansemuapetugas',[PetugasKorektorController::class,'laporansemuapetugas'])->name('laporansemuapetugas');
    Route::get('/laporanhonorium',[PetugasKorektorController::class,'laporanhonorium'])->name('laporanhonorium');
    Route::get('/laporanhonoriumdireksi',[PetugasKorektorController::class,'laporanhonoriumdireksi'])->name('laporanhonoriumdireksi');
    Route::post('/showLaporan',[PetugasKorektorController::class,'showLaporan'])->name('showLaporan');

    Route::get('/viewsisapetugasKorektor', [PetugasKorektorController::class, 'viewsisa'])->name('viewsisapetugasKorektor');
    Route::get('/randompetugasKorektor', [PetugasKorektorController::class, 'random'])->name('randompetugasKorektor');
    Route::get('/viewptspetugasKorektor', [PetugasKorektorController::class, 'viewpts'])->name('viewptspetugasKorektor');
    Route::get('/monitoringpetugasKorektor', [PetugasKorektorController::class, 'monitoring'])->name('monitoringpetugasKorektor');
    Route::post('/monitoringpetugasKorektor', [PetugasKorektorController::class, 'showMonitoring'])->name('monitoringpetugasKorektor');
    Route::get('/koreksipetugasKorektor', [PetugasKorektorController::class, 'koreksi'])->name('koreksipetugasKorektor');

    Route::resource('petugasEntry', PetugasEntryController::class)->parameters(['petugasEntry' => 'kd_ptgentry'])->except(['create','edit']);
    Route::get('/printpetugasEntry', [PetugasEntryController::class, 'print'])->name('printpetugasEntry');
    // Route::delete('/deletepetugasEntry/{id}', [PetugasEntryController::class, 'destroy']);

    Route::resource('gunaPersil', GunaPersilController::class)->parameters(['gunaPersil' => 'kd_gunapersil'])->except(['create','edit']);
    Route::get('/gunaPersil', [GunaPersilController::class, 'index'])->name('gunaPersil');
    Route::delete('/deletegunaPersil/{id}', [GunaPersilController::class, 'destroy']);
    Route::post('/printgunaPersil', [GunaPersilController::class, 'printPreview'])->name('printgunaPersil');
    Route::post('/cetakgunaPersil', [GunaPersilController::class, 'cetak'])->name('cetakgunaPersil');

    Route::resource('retribusi', RetribusiController::class)->parameters(['retribusi' => 'kd_retribusi'])->except(['create', 'edit']);
    Route::get('/printretribusi', [RetribusiController::class, 'print'])->name('printretribusi');
    Route::post('/cetakretribusi', [RetribusiController::class, 'cetak'])->name('cetakretribusi');
    // Route::delete('/deleteRetribusi/{id}',[RetribusiController::class,'destroy']);

    Route::resource('/wilayahDistribusi', WilayahDistribusiController::class)->parameters(['wilayahDistribusi' => 'kd_wilayah'])->except(['create', 'edit']);
    Route::get('/printwilayahDistribusi', [WilayahDistribusiController::class, 'print'])->name('printwilayahDistribusi');
    Route::post('/cetakwilayahDistribusi', [WilayahDistribusiController::class, 'cetak'])->name('cetakwilayahDistribusi');
    // Route::delete('/deleteWilayahDistribusi/{id}',[WilayahDistribusiController::class,'destroy']);

    Route::resource('/statusTanah', StatusTanahController::class)->parameters(['statusTanah' => 'status_tanah'])->except(['create', 'edit']);
    Route::get('/printstatusTanah', [StatusTanahController::class, 'print'])->name('printstatusTanah');
    Route::post('/cetakstatusTanah', [StatusTanahController::class, 'cetak'])->name('cetakstatusTanah');
    // Route::delete('/deleteStatusTanah/{id}',[StatusTanahController::class,'destroy']);

    Route::resource('/statusAir', StatusAirController::class)->parameters(['statusAir' => 'kd_statusair'])->except(['create', 'edit']);
    Route::get('/printstatusAir', [StatusAirController::class, 'print'])->name('printstatusAir');
    Route::post('/cetakstatusAir', [StatusAirController::class, 'cetak'])->name('cetakstatusAir');
    // Route::delete('/deleteStatusAir/{id}', [StatusAirController::class, 'destroy']);

    Route::resource('/statusMeter', StatusMeterController::class)->parameters(['statusMeter' => 'kd_statusair'])->except(['create', 'edit']);
    Route::get('/printstatusMeter', [StatusMeterController::class, 'print'])->name('printstatusMeter');
    Route::post('/cetakstatusMeter', [StatusMeterController::class, 'cetak'])->name('cetakstatusMeter');
    // Route::delete('/deleteStatusMeter/{id}', [StatusMeterController::class, 'destroy']);

    Route::resource('/merekMeter', MerekMeterController::class)->parameters(['merekMeter' => 'kd_merk'])->except(['create', 'edit']);
    Route::get('/printmerekMeter', [MerekMeterController::class, 'print'])->name('printmerekMeter');
    Route::post('/cetakmerekMeter', [MerekMeterController::class, 'cetak'])->name('cetakmerekMeter');
    // Route::delete('/deleteMerekMeter/{id}', [MerekMeterController::class, 'destroy']);

    Route::resource('materai', MateraiController::class)->parameters(['materai' => 'nominal'])->except(['create', 'edit']);
    Route::get('/printMaterai', [MateraiController::class, 'print'])->name('printMaterai');
    Route::post('/cetakMaterai', [MateraiController::class, 'cetak'])->name('cetakMaterai');
    // Route::delete('/deletematerai/{id}', [MateraiController::class, 'destroy']);

    Route::resource('/panggilanDinas', PanggilanDinasController::class)->parameters(['panggilanDinas' => 'jns_pdinas'])->except(['create', 'edit']);
    // Route::get('/printpanggilanDinas/setting', [PanggilanDinasController::class, 'settingPrint'])->name('settingPrintPanggilan');
    Route::post('/printpanggilanDinas', [PanggilanDinasController::class, 'print'])->name('printpanggilanDinas');
    Route::post('/cetakpanggilanDinas', [PanggilanDinasController::class, 'cetak'])->name('cetakpanggilanDinas');


    Route::resource('/telponPelanggan', TelponPelangganController::class)->parameters(['telponPelanggan' => 'no_plg'])->except(['create','destroy', 'store']);

    Route::get('/monitoringPelanggan', [MonitoringPelangganController::class, 'index'])->name('monitoringPelanggan');
    Route::get('/monitoringPelanggan/{id}', [MonitoringPelangganController::class, 'show']);
    Route::delete('/deletemonitoringPelanggan/{id}', [MonitoringPelangganController::class, 'destroy']);
    Route::post('/monitoringPelanggan/filter', [MonitoringPelangganController::class, 'filter']);
    Route::post('/monitoringPelanggan/cari_plg', [MonitoringPelangganController::class, 'cariPlg']);

    Route::resource('/penetapanTeraMeter', PenetapanTeraMeterController::class)->parameters(['penetapanTeraMeter' => 'no_bonc'])->except(['create', 'edit']);
    Route::get('/penetapanTeraMeter', [PenetapanTeraMeterController::class, 'index'])->name('penetapanTeraMeter');
    Route::get('/penetapanTeraMeter/{no_bonc}', [PenetapanTeraMeterController::class, 'show'])->name('penetapanTeraMeter.show');
    Route::post('/printpenetapanTeraMeter', [PenetapanTeraMeterController::class, 'printPreview'])->name('printpenetapanTeraMeter');
    Route::post('/cetakpenetapanTeraMeter', [PenetapanTeraMeterController::class, 'cetak'])->name('cetakpenetapanTeraMeter');
    //Route::get('/penetapanTeraMeter/{no_bonc}', [PenetapanTeraMeterController::class, 'getData']);

    Route::get('/printpenetapanTeraMeter', [PenetapanTeraMeterController::class, 'print'])->name('printpenetapanTeraMeter');

    Route::get('/insertPosisiMeter', [InsertPosisiMeterController::class, 'index'])->name('insertPosisiMeter');
    Route::post('/insertPosisiMeter', [InsertPosisiMeterController::class, 'import'])->name('insertPosisiMeter.post');

    Route::get('/surveyTarif', [SurveyTarifController::class, 'index'])->name('surveyTarif');
    Route::post('/surveyTarif', [SurveyTarifController::class,'show'])->name('surveyTarif.show');
    Route::get('/cetaksurvey', [SurveyTarifController::class, 'cetaksurvey'])->name('cetaksurvey');
    Route::get('/dataKosong', [SurveyTarifController::class, 'datakosong'])->name('dataKosong');
    Route::get('/cetakdk', [SurveyTarifController::class, 'cetakdk'])->name('cetakdk');
    Route::get('/editpln', [SurveyTarifController::class, 'editpln'])->name('editpln');
    Route::patch('/editJalan', [SurveyTarifController::class, 'editJalan'])->name('editJalan');
    Route::post('/editpln', [SurveyTarifController::class, 'showeditpln'])->name('editpln.showeditpln');
    Route::get('/lebihentri', [SurveyTarifController::class, 'lebihentri'])->name('lebihentri');
    Route::get('/cetaklebihentri', [SurveyTarifController::class, 'cetaklebihentri'])->name('cetaklebihentri');

    Route::get('/printsurveyTarif', [SurveyTarifController::class, 'print'])->name('printsurveyTarif');
    Route::get('/createsurveyTarif', [SurveyTarifController::class, 'create'])->name('createsurveyTarif');

    Route::get('/cekSurveyTarif',  [CekSurveyTarifController::class,'index'])->name('cekSurveyTarif');
    Route::get('/cekSurveyTarif/{nopel}', [CekSurveyTarifController::class,'show'])->name('cekSurveyTarif.show');

    Route::resource('/mlnCode', MLNCodeController::class)->parameters(['mlnCode' => 'kode'])->except(['create', 'edit']);


    Route::resource('/pelangganMeterC', PelangganMeterCController::class)->parameters(['pelangganMeterC' => 'no_plg'])->except(['create', 'edit']);
    //Route::get('/pelangganMeterC', [ PelangganMeterCController::class, 'index'])->name('pelangganMeterC');


    // Route::get('cetakBAPerorangan', [CetakBAPeroranganController::class, 'index'])->name('cetakBAPerorangan');
});

Route::prefix('pengaduan')->group(function() {

    Route::get('pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
    Route::post('cariPelanggan', [PengaduanController::class, 'cariPelanggan'])->name('cariPelanggan');

    Route::get('riwayatPemakaian', [RiwayatPemakaianController::class, 'index'])->name('riwayatPemakaian');
    Route::get('infoPelanggaran', [RiwayatPemakaianController::class, 'infoPelanggaran'])->name('infoPelanggaran');
    Route::get('kartuPelanggan', [RiwayatPemakaianController::class, 'kartuPelanggan'])->name('kartuPelanggan');
    Route::get('pelanggaran', [RiwayatPemakaianController::class, 'pelanggaran'])->name('pelanggaran');


    Route::get('informasiPelunasanRekening', [InformasiPelunasanRekeningController::class, 'index'])->name('informasiPelunasanRekening');
    Route::post('/informasiPelunasanRekening', [InformasiPelunasanRekeningController::class,'show'])->name('informasiPelunasanRekening.show');
    Route::post('printinformasiPelunasanRekening', [InformasiPelunasanRekeningController::class, 'print'])->name('printinformasiPelunasanRekening');
    Route::post('cetakinformasiPelunasanRekening', [InformasiPelunasanRekeningController::class, 'cetak'])->name('cetakinformasiPelunasanRekening');
});

Route::prefix('mutasipelanggan')->group(function() {
    Route::get('monitoringGunaPersil', [MonitoringGunaPersilController::class, 'index'])->name('monitoringGunaPersil');
    Route::post('monitoringGunaPersil', [MonitoringGunaPersilController::class, 'filter'])->name('monitoringGunaPersil');
    // Route::get('previewmonitoring', [MonitoringGunaPersilController::class, 'showPrev'])->name('previewmonitoring');
    Route::post('previewmonitoring', [MonitoringGunaPersilController::class, 'preview'])->name('previewmonitoring');
    Route::post('cetakmonitoring', [MonitoringGunaPersilController::class, 'cetak'])->name('cetakmonitoring');

    Route::get('historiMutasi', [HistoriMutasiController::class, 'index'])->name('historiMutasi');
    Route::post('historiMutasi', [HistoriMutasiController::class,'show'])->name('historiMutasi.show');

    Route::resource('/monitoringBAMutasiKolektif', MonitoringBAMutasiKolektifController::class)->parameters(['monitoringBAMutasiKolektif' => 'no_bamutkol'])->except(['create', 'edit', 'store']);
    Route::get('monitoringBAMutasiKolektif', [MonitoringBAMutasiKolektifController::class, 'index'])->name('monitoringBAMutasiKolektif');
    Route::get('createmonitoringBAMutasiKolektif', [MonitoringBAMutasiKolektifController::class, 'create'])->name('createmonitoringBAMutasiKolektif');
    Route::get('/monitoringBAMutasiKolektif', [MonitoringBAMutasiKolektifController::class, 'show'])->name('monitoringBAMutasiKolektif');
    Route::get('preview', [MonitoringBAMutasiKolektifController::class, 'preview'])->name('preview');
    Route::get('previewLampiran', [MonitoringBAMutasiKolektifController::class, 'preview'])->name('preview');
    Route::get('previewPdinas', [MonitoringBAMutasiKolektifController::class, 'previewPdinas'])->name('previewPdinas');
    Route::get('previewUsulan', [MonitoringBAMutasiKolektifController::class, 'previewLampiran'])->name('previewLampiran');
    Route::get('persetujuan', [MonitoringBAMutasiKolektifController::class, 'persetujuan'])->name('persetujuan');

    Route::resource('/monitoringBAMutasiPerorangan', MonitoringBAMutasiPeroranganController::class)->parameters(['monitoringBAMutasiPerorangan' => 'no_bamutasi'])->except(['create', 'edit']);
    Route::get('monitoringBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'index'])->name('monitoringBAMutasiPerorangan');
    Route::get('/monitoringBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'show'])->name('monitoringBAMutasiPerorangan');
    Route::get('createmonitoringBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'create'])->name('createmonitoringBAMutasiPerorangan');
    Route::get('editmonitoringBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'edit'])->name('editmonitoringBAMutasiPerorangan');
    Route::get('persetujuanmonitoringBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'persetujuan'])->name('persetujuanmonitoringBAMutasiPerorangan');
    Route::post('previewBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'preview'])->name('previewBAMutasiPerorangan');
    Route::post('cetakBAMutasiPerorangan', [MonitoringBAMutasiPeroranganController::class, 'cetak'])->name('cetakBAMutasiPerorangan');
    Route::get('previewBA', [MonitoringBAMutasiPeroranganController::class, 'previewBA'])->name('previewBA');
    Route::get('previewBATarif', [MonitoringBAMutasiPeroranganController::class, 'previewBATarif'])->name('previewBATarif');
    Route::get('previewPanggilan', [MonitoringBAMutasiPeroranganController::class, 'previewPanggilan'])->name('previewPanggilan');
    Route::get('previewPenolakan', [MonitoringBAMutasiPeroranganController::class, 'previewPenolakan'])->name('previewPenolakan');
    Route::get('previewUsulan', [MonitoringBAMutasiPeroranganController::class, 'previewUsulan'])->name('previewUsulan');

    Route::resource('/mutasiKolektif', MutasiKolektifController::class)->parameters(['mutasiKolektif' => 'no_plg'])->except(['create', 'edit']);
    Route::get('mutasiKolektif', [MutasiKolektifController::class, 'index'])->name('mutasiKolektif');
    Route::get('/mutasiKolektif/{no_plg}', [MutasiKolektifController::class, 'show'])->name('mutasiKolektif.show');
    Route::get('/previewBAMutasiKolektif', [MutasiKolektifController::class, 'previewBAMutasiKolektif'])->name('previewBAMutasiKolektif');
    Route::get('/previewLampiranMutasiKolektif', [MutasiKolektifController::class, 'previewLampiranMutasiKolektif'])->name('previewLampiranMutasiKolektif');
    Route::post('/cetakBAMutasiKolektif', [MutasiKolektifController::class, 'cetakBAMutasiKolektif'])->name('cetakBAMutasiKolektif');
    Route::post('/cetakLampiranMutasiKolektif', [MutasiKolektifController::class, 'cetakLampiranMutasiKolektif'])->name('cetakLampiranMutasiKolektif');

    Route::get('laporanRekapitulasiPerubahanTarif', [LaporanRekapitulasiPerubahanTarifController::class, 'index'])->name('laporanRekapitulasiPerubahanTarif');
    Route::post('preview', [LaporanRekapitulasiPerubahanTarifController::class, 'preview'])->name('preview');

    Route::get('laporanPerubahanTNTperBulan', [LaporanPerubahanTNTperBulanController::class, 'index'])->name('laporanPerubahanTNTperBulan');
    Route::post('laporanPerubahanTNTperBulan', [LaporanPerubahanTNTperBulanController::class, 'show'])->name('laporanPerubahanTNTperBulan');
    Route::post('previewBulan', [LaporanPerubahanTNTperBulanController::class, 'preview'])->name('previewBulan');
    Route::post('cetakBulan', [LaporanPerubahanTNTperBulanController::class, 'cetak'])->name('cetakBulan');

    Route::get('laporanRekapitulasiNaikTurun', [LaporanRekapitulasiNaikTurunController::class, 'index'])->name('laporanRekapitulasiNaikTurun');
    Route::post('laporanRekapitulasiNaikTurun', [LaporanRekapitulasiNaikTurunController::class, 'filter'])->name('laporanRekapitulasiNaikTurun');
    Route::post('printRekapitulasiNaikTurun', [LaporanRekapitulasiNaikTurunController::class, 'print'])->name('printRekapitulasiNaikTurun');
    Route::post('cetakRekapitulasiNaikTurun',[LaporanRekapitulasiNaikTurunController::class, 'cetak'])->name('cetakRekapitulasiNaikTurun');

    Route::get('laporanTarifPerBendel', [LaporanTarifPerBendelController::class, 'index'])->name('laporanTarifPerBendel');
    // Route::post('laporanTarifPerBendel', [LaporanTarifPerBendelController::class, 'showLaporanBendel'])->name('laporanTarifPerBendel');
    Route::post('previewBendel', [LaporanTarifPerBendelController::class, 'preview'])->name('previewBendel');
    Route::post('/cetakBendel', [LaporanTarifPerBendelController::class, 'cetak'])->name('cetakBendel');

    Route::get('entriSurat', [SuratPemberitahuanController::class, 'entriSurat'])->name('entriSurat');
    Route::get('printlaporan', [SuratPemberitahuanController::class, 'print'])->name('printlaporan');
    Route::get('monitoring', [SuratPemberitahuanController::class, 'monitoring'])->name('monitoring');


    Route::get('usulanMutasiTarif', [UsulanMutasiTarifController::class, 'index'])->name('usulanMutasiTarif');

    Route::get('cetakBAPerorangan', [CetakBAPeroranganController::class, 'index'])->name('cetakBAPerorangan');
    Route::post('preview', [CetakBAPeroranganController::class, 'preview'])->name('preview');
    Route::post('cetakBA', [CetakBAPeroranganController::class, 'cetak'])->name('cetakBA');

});


Route::prefix('mutasiPemakaian')->group(function () {
    Route::get('/usulanMutasiTarif', [ usulanMutasiTarifController::class, 'index'])->name('usulanMutasiTarif');
    Route::get('/cetakBA', [ usulanMutasiTarifController::class, 'cetakBA'])->name('cetakBAusulanTarif');

});
