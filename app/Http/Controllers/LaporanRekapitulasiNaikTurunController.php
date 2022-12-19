<?php

namespace App\Http\Controllers;

use App\Models\BaMutasi;
use Illuminate\Http\Request;
use App\Models\LaporanRekapitulasiNaikTurun;

class LaporanRekapitulasiNaikTurunController extends Controller
{
    public function index()
    {
        $data = [];
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.index', compact('data'));
    }

    public function filter(Request $request)
    {
        //dd($request->post());
        $awal = explode("-",$request->periode);
        $akhir = explode("-",$request->periode1);

        if($request->dasar == "penerbitan"){
            $pAwal  = $awal[1].$awal[0];
            $pAkhir = $akhir[1].$akhir[0];
            $data = BaMutasi::getPenerbit($pAwal, $pAkhir, $request->level);
            // $hasil = "penerbitan";
        }else{
            $pAwal  = $awal[0]."-".$awal[1]."-".$awal[2];
            $pAkhir = $akhir[0]."-".$akhir[1]."-".$akhir[2];
            $data = BaMutasi::getPengesahan($pAwal, $pAkhir, $request->level);
            // $hasil = "pengesahan";
        }
        // dd($data);

        // return response()->json($data);
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.index', compact('data'));
    }

    public function print()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.print');
    }

    public function cetak()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.cetak');
    }
}
