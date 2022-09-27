<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monitoringBAMutasiKolektif;

class monitoringBAMutasiKolektifController extends Controller
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
    
    public function cetakUsulan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.cetakUsulan');
    }
    
    public function cetakLampiran()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.cetakLampiran');
    }
    
    public function pdinas()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.pdinas');
    }
}
