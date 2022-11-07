<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPerubahanTNTperBulan;
class LaporanPerubahanTNTperBulanController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.index');
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.preview');
    }
}
