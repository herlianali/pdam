<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringBAMutasiKolektif;

class MonitoringBAMutasiKolektifController extends Controller
{

    public function index()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.index');
    }

    public function create()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.create');
    }


    public function persetujuan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.persetujuan');
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.preview');
    }

    public function previewUsulan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.previewUsulan');
    }

    public function previewLampiran()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.previewLampiran');
    }

    public function previewPdinas()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.previewPdinas');
    }
}
