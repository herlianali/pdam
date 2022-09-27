<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mutasiKolektif;

class mutasiKolektifController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.index');
    }
    public function cetakBA()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.cetakBA');
    }
    public function cetakLampiran()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.cetakLampiran');
    }
}
