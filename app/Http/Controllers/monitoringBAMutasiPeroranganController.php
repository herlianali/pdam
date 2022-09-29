<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringBAMutasiPerorangan;

class MonitoringBAMutasiPeroranganController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.index');
    }
    public function create()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.create');
    }
    public function persetujuan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.persetujuan');
    }
    public function edit()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.edit');
    }
    public function cetakBA()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.cetakBA');
    }
    public function cetakUsulan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.cetakUsulan');
    }
    public function cetakPenolakanUsulan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.cetakPenolakanUsulan');
    }
    public function cetakBATarif()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.cetakBATarif');
    }
    public function panggilanDinas()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.panggilanDinas');
    }
}
