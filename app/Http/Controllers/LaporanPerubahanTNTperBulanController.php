<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPerubahanTNTperBulan;
use App\Models\BaMutasi;
class LaporanPerubahanTNTperBulanController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.index');
    }

    public function show(Request $request)
    {
        if($request->daasar == "sah"){
            
        }
        return response()->json($request->post());
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.preview');
    }
}
