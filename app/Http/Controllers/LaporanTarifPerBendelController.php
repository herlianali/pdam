<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporanTarifPerBendel;

class LaporanTarifPerBendelController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.laporanTarifPerBendel.index');
    }
}
