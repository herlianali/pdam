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
        $formData = [];
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.index', compact('data', 'formData'));
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
            $formData = [
                'periode'   => $request->periode,
                'periode1'  => $request->periode1,
                'dasar'     => $request->dasar,
                'level'     => $request->level
            ];
            // $hasil = "penerbitan";
        }else{
            $pAwal  = $awal[0]."-".$awal[1]."-".$awal[2];
            $pAkhir = $akhir[0]."-".$akhir[1]."-".$akhir[2];
            $data = BaMutasi::getPengesahan($pAwal, $pAkhir, $request->level);
            $formData = [
                'periode'   => $request->periode,
                'periode1'  => $request->periode1,
                'dasar'     => $request->dasar,
                'level'     => $request->level
            ];
            // $hasil = "pengesahan";
        }
        
        // dd($data);

        // return response()->json($data);
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.index', compact('data', 'formData'));
    }

    public function print(Request $request)
    {
        // dd($request->post());
        $awal = explode("-",$request->periode);
        $akhir = explode("-",$request->periode1);

        if($request->dasar == "penerbitan"){
            $pAwal  = $awal[1].$awal[0];
            $pAkhir = $akhir[1].$akhir[0];
            $periode  = $awal[1].$awal[0];
            $data = BaMutasi::getPenerbit($pAwal, $pAkhir, $request->level);
            // $countData = $data['jumlah']->count();
            $formData = [
                'periode'   => $request->periode,
                'periode1'  => $request->periode1,
                'dasar'     => $request->dasar,
                'level'     => $request->level
            ];
            // $hasil = "penerbitan";
        }else{
            $pAwal  = $awal[0]."-".$awal[1]."-".$awal[2];
            $pAkhir = $akhir[0]."-".$akhir[1]."-".$akhir[2];
            $periode  = $awal[1].$awal[0];
            $data = BaMutasi::getPengesahan($pAwal, $pAkhir, $request->level);
            // $countData = $data['jumlah']->count();
            $formData = [
                'periode'   => $request->periode,
                'periode1'  => $request->periode1,
                'dasar'     => $request->dasar,
                'level'     => $request->level
            ];
            // $hasil = "pengesahan";
        }
        
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.print', compact('data', 'formData', 'periode'))->with('i');;
    }

    public function cetak(Request $request)
    {
        // dd($request->post());
        $awal = explode("-",$request->periode);
        $akhir = explode("-",$request->periode1);
        
        if($request->dasar == "penerbitan"){
            $pAwal  = $awal[1].$awal[0];
            $pAkhir = $akhir[1].$akhir[0];
            $periode  = $awal[1].$awal[0];
            $data = BaMutasi::getPenerbit($pAwal, $pAkhir, $request->level);
            $formData = [
                'periode'   => $request->periode,
                'periode1'  => $request->periode1,
                'dasar'     => $request->dasar,
                'level'     => $request->level
            ];
            // $hasil = "penerbitan";
        }else{
            $pAwal  = $awal[0]."-".$awal[1]."-".$awal[2];
            $pAkhir = $akhir[0]."-".$akhir[1]."-".$akhir[2];
            $periode  = $awal[1].$awal[0];
            $data = BaMutasi::getPengesahan($pAwal, $pAkhir, $request->level);
            $formData = [
                'periode'   => $request->periode,
                'periode1'  => $request->periode1,
                'dasar'     => $request->dasar,
                'level'     => $request->level
            ];
            // $hasil = "pengesahan";
        }
        
        
        return view('BAMutasiPelanggan.laporanRekapitulasiNaikTurun.cetak', compact('data', 'formData', 'periode'))->with('i');;
    }
}
