<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPerubahanTNTperBulan;
<<<<<<< HEAD
use App\Models\BaMutasi;
=======
use Carbon\Carbon;
>>>>>>> b99fccb1331ff0f066ad6bbc9ac5317d171d3260
class LaporanPerubahanTNTperBulanController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('m/Y');
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.index',compact('date'))->with('i');
    }

    public function show(Request $request)
    {

        return response()->json($request->post());
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.preview');
    }
}
