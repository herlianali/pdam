<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanTarifPerBendel;

class LaporanTarifPerBendelController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.laporanTarifPerBendel.index');
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanTarifPerBendel.preview');
    }
}
