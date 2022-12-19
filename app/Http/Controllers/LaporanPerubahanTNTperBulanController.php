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

    public function preview(Request $request)
    {
        // dd($request->post());
        $periodeAwal = explode("/",$request->periode);
        if($request->dasar == "sah"){
            $periode  = $periodeAwal[1].$periodeAwal[0];
            $data = array(
                'filter'    => BaMutasi::getSah($periode, $request->level),
                'periode'   => $request->periode,
                'dasar'     => $request->dasar,
                'level'     => $request->level,
            );
        }else{
            $periode  = $periodeAwal[0].$periodeAwal[1];
            $data = array(
                'filter'    => BaMutasi::getTerbit($periode, $request->level),
                'periode'   => $request->periode,
                'dasar'     => $request->dasar,
                'level'     => $request->level,
            );
        }

        //dd($data);
        // return response()->json($request->post());
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.preview', compact('data'))->with('i');
    }

    public function cetak(Request $request)
    {
        // dd($request->post());
        $periodeAwal = explode("/",$request->periode);
        if($request->dasar == "sah"){
            $periode  = $periodeAwal[1].$periodeAwal[0];
            $data = array(
                'filter'    => BaMutasi::getSah($periode, $request->level),
                'periode'   => $request->periode,
                'dasar'     => $request->dasar,
                'level'     => $request->level,
            );
        }else{
            $periode  = $periodeAwal[0].$periodeAwal[1];
            $data = array(
                'filter'    => BaMutasi::getTerbit($periode, $request->level),
                'periode'   => $request->periode,
                'dasar'     => $request->dasar,
                'level'     => $request->level,
            );
        }

        //dd($data);
        // return response()->json($request->post());
        return view('BAMutasiPelanggan.laporanPerubahanTNTperBulan.cetak', compact('data'))->with('i');
    }
}