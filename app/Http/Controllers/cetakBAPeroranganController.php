<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cetakBAPerorangan;

class cetakBAPeroranganController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.cetakBAPerorangan.index');
    }
}
