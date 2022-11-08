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
    public function previewBA()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewBA');
    }
    public function previewUsulan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewUsulan');
    }
    public function previewPenolakan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewPenolakan');
    }
    public function previewBATarif()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewBATarif');
    }
    public function previewPanggilan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewPanggilan');
    }
}
