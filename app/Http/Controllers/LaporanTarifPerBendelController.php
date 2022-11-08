<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanTarifPerBendel;
use App\Models\Tarif;

class LaporanTarifPerBendelController extends Controller
{
    public function index()
    {
        $dataS  = Tarif::all();
        return view('BAMutasiPelanggan.laporanTarifPerBendel.index', compact('dataS'))->with('i');
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanTarifPerBendel.preview');
    }
}
