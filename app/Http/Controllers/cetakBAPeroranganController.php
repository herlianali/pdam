<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CetakBAPerorangan;

class CetakBAPeroranganController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.cetakBAPerorangan.index');
    }
}
