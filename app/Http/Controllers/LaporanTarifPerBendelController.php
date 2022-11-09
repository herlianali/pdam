<?php

namespace App\Http\Controllers;

use App\Models\DilM;
use Illuminate\Http\Request;
use App\Models\LaporanTarifPerBendel;
use App\Models\Tarif;
use Illuminate\Support\Facades\DB;

class LaporanTarifPerBendelController extends Controller
{
    public function index()
    {
        $dataS = Tarif::getKode();
        return view('BAMutasiPelanggan.laporanTarifPerBendel.index', compact('dataS'))->with('i');
    }

    public function showLaporanBendel(Request $request)
    {
        // request{zona, zona_all, bundel, bundel_all, tarif, urut:[noplg alamat]}

        if(!$request->zona_all){
            $query1 = DilM::getDataTarifBundel()->where('zona', '=', $request->zona);
            $tester1 = "zona by request";
        }else{
            $query1 = DilM::getDataTarifBundel()->whereRaw("zona not in ('000','001')");
            $tester1 = "zona kecuali 000, 001";
        }

        if(!$request->bundel_all){
            $query2 = $query1->where(DB::raw('trim(no_bundel)'), '=', $request->bundel);
            $tester2 = $tester1."Dengan no bundel";
        }else{
            $query2 = $query1;
            $tester2 = $tester1."Tidak Dengan no bundel";
        }

        if($request->tarif <> "ALL"){
            $query3 = $query2->where(DB::raw('trim(kd_tarif)'), '=', trim($request->tarif, ' '));
            $tester3 = $tester2."Kode Tidak sama dengan All";
        }else{
            $query3 = $query2;
            $tester3 = $tester2."Kode Sama Dengan ALL";
        }

        if ($request->urut == "noplg") {
            $data = $query3->orderBy('no_plg')->get();
            $hasil = $tester3."Urut Berdasarkan noplg";
        }elseif($request->urut == "alamat") {
            $data = $query3->orderBy('jalan')->get();
            $hasil = $tester3."Urut Berdasarkan Jalan";
        }

        return response()->json([$data, $hasil]);
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.laporanTarifPerBendel.preview');
    }
}
