<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanRekapitulasiNaikTurun;

class LaporanRekapitulasiNaikTurunController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.index');
    }

    public function print()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.print');
    }
}
