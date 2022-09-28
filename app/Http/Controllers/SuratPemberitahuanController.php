<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPemberitahuan;

class SuratPemberitahuanController extends Controller
{
    public function entriSurat()
    {
        return view('BAMutasiPelanggan.SuratPemberitahuan.entriSurat');
    }
    public function entriSuratAwal()
    {
        return view('BAMutasiPelanggan.SuratPemberitahuan.entriSuratAwal');
    }
}
