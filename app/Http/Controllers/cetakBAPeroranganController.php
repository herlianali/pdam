<?php

namespace App\Http\Controllers;

use App\Models\BaMutasi;
use Illuminate\Http\Request;
use App\Models\CetakBAPerorangan;
use App\Models\DilM;

class CetakBAPeroranganController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.cetakBAPerorangan.index');
    }

    public function preview(Request $request)
    {
        $formFilter = array(
            'filter'        => BaMutasi::getRange($request->start, $request->end, $request->no_bamutasi),
            'start'         => $request->start,
            'end'           => $request->end,
        );
        // dd($formFilter['filter'][0]);
        return view('BAMutasiPelanggan.cetakBAPerorangan.preview', compact('formFilter'))->with('i');
    }

    public function cetak(Request $request)
    {
        $formFilter = array(
            'filter'        => BaMutasi::getRange($request->start, $request->end, $request->no_bamutasi),
            'start'         => $request->start,
            'end'           => $request->end,
        );
        // dd($formFilter['filter'][0]);
        return view('BAMutasiPelanggan.cetakBAPerorangan.cetak', compact('formFilter'))->with('i');
    }
}
