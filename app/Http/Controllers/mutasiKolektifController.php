<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiKolektif;
use Carbon\Carbon;

class MutasiKolektifController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('Y-m-d');
        $getlast = new MutasiKolektif;
        $no = (int)$getlast->getLast()+1;
        return view('BAMutasiPelanggan.mutasiKolektif.index', compact('date', 'getlast', 'no'))->with('i');
    }

    public function show($no_plg)
    {
        
    }
    public function previewBA()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.previewBA');
    }
    public function previewLampiran()
    {
        $date = Carbon::now()->format('d-m-Y');
        return view('BAMutasiPelanggan.mutasiKolektif.previewLampiran', compact('date'))->with('i');
    }
    public function cetakBA()
    {
        $date = Carbon::now()->format('d-m-Y');
        return view('BAMutasiPelanggan.mutasiKolektif.cetakBA', compact('date'))->with('i');
    }
    public function cetakLampiran()
    {
        $date = Carbon::now()->format('d-m-Y');
        return view('BAMutasiPelanggan.mutasiKolektif.cetakLampiran', compact('date'))->with('i');
    }
}
