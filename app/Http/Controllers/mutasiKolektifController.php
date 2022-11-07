<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiKolektif;

class MutasiKolektifController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.index');
    }
    public function previewBA()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.previewBA');
    }
    public function previewLampiran()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.previewLampiran');
    }
}
