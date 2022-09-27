<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanRekapitulasiPerubahanTarif;

class LaporanRekapitulasiPerubahanTarifController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiPerubahanTarif.index');
    }
    public function preview()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiPerubahanTarif.preview');
    }
}
