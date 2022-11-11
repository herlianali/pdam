<?php

namespace App\Http\Controllers;

use App\Models\BaMutasi;
use Illuminate\Http\Request;
use App\Models\LaporanRekapitulasiNaikTurun;

class LaporanRekapitulasiNaikTurunController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.index');
    }

    public function show(Request $request)
    {
        $awal = explode("-",$request->pAwal);
        $akhir = explode("-",$request->pAkhir);

        if($request->dasar == "penerbit"){
            $pAwal  = $awal[1].$awal[2];
            $pAkhir = $akhir[1].$akhir[2];
            $data = BaMutasi::getPenerbit($pAwal, $pAkhir, $request->level);
            // $hasil = "penerbit";
        }else{
            // $pAwal  = date("d/m/Y", strtotime($request->pAwal));
            // $pAkhir = date("d/m/Y", strtotime($request->pAkhir));
            $data = BaMutasi::getPengesahan($request->pAwal, $request->Akhir, $request->level);
            // $hasil = "pengesahan";
        }

        return response()->json($data);
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.preview');
    }
}
