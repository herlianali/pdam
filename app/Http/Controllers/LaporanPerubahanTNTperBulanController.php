<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPerubahanTNTperBulan;
use Carbon\Carbon;
class LaporanPerubahanTNTperBulanController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('m/Y');
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.index',compact('date'))->with('i');
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.preview');
    }
}
