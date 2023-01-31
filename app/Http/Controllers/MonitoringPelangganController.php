<?php

namespace App\Http\Controllers;

use App\Models\DilM;
use Illuminate\Http\Request;
use App\Models\MonitoringPelanggan;

class MonitoringPelangganController extends Controller
{
    public function index()
    {
        // $mPelanggan = new MonitoringPelanggan;
        // $monPelanggan = $mPelanggan->getData();
        $data = [];
        $formFilter = [];
        return view('master.monitoringPelanggan.index', compact('data', 'formFilter'))->with('i');
    }

<<<<<<< HEAD
    public function show(Request $request)
    {
        //$monPelanggan = MonitoringPelanggan::where('no_plg', $no_plg)->first();
        $data = DilM::getPelanggan($request->no_plg);
        $info = DilM::getInfo($request->no_plg);
        $formFilter = array(
            'info'      => DilM::getInfo($request->no_plg),
            'no_plg'    => $request->no_plg,
            'zona'      => $request->zona
        );
        return view('master.monitoringPelanggan.index', compact('data', 'info', 'formFilter'))->with('i');
    }

    public function info(Request $request, $no_plg)
    {
        DilM::where('no_plg', $no_plg)->first([
            'no_plg' => $request->no_plg
        ]);
        return redirect()->route('jenisPekerjaan.index');
=======
    public function cariPlg(Request $request)
    {
        $no_plg = $request->no_plg;
        $pelanggan = MonitoringPelanggan::getPelanggan($no_plg);
        return response()->json($pelanggan);
    }

    public function show($no_plg)
    {
        $pelanggan = MonitoringPelanggan::getPelanggan($no_plg);
        return response()->json($pelanggan);
>>>>>>> 9c8b61fdb2292dbf93f27ce238b92f323d69a067
    }


    public function filter(Request $request)
    {
        if($request->cname == "true" && $request->cekAlamat == "false") {
            $query = "AND UPPER(nama) = '".$request->nama."'";
        }elseif($request->cname == "false" && $request->cekAlamat == "true") {
            if (!empty($request->jalan)) {
                $jalan = "AND UPPER(TRIM(jalan)) = '".$request->jalan."'";
            }else{
                $jalan = "";
            }

            if (!empty($request->gang)) {
                $gang = "AND UPPER(TRIM(gang)) = '".$request->gang."'";
            }else{
                $gang = "";
            }

            if (!empty($request->nomor)) {
                $nomor = "AND nomor = '".$request->nomor."'";
            }else{
                $nomor = "";
            }

            if (!empty($request->noTambahan)) {
                $noTambahan = "AND UPPER(TRIM(notamb)) = UPPER('".$request->noTambahan."')";
            }else{
                $noTambahan = "";
            }

            $query = $jalan." ".$gang." ".$nomor." ".$noTambahan;
        }elseif($request->cname === "true" && $request->cekAlamat === "true") {
            $name = "UPPER(nama) = '".$request->nama."'";
            if (!empty($request->jalan)) {
                $jalan = "AND UPPER(TRIM(jalan)) = '".$request->jalan."'";
            }else{
                $jalan = "";
            }

            if (!empty($request->gang)) {
                $gang = "AND UPPER(TRIM(gang)) = '".$request->gang."'";
            }else{
                $gang = "";
            }

            if (!empty($request->nomor)) {
                $nomor = "AND nomor = '".$request->nomor."'";
            }else{
                $nomor = "";
            }

            if (!empty($request->noTambahan)) {
                $noTambahan = "AND UPPER(TRIM(notamb)) = UPPER('".$request->noTambahan."')";
            }else{
                $noTambahan = "";
            }

            $query = $name." ".$jalan." ".$gang." ".$nomor." ".$noTambahan;
        }else{
            $query = "";
        }

        $data = [
            'wilayah' => $request->wilayah,
            'status'  => $request->status,
            'query'   => $query
        ];

        $tampil = MonitoringPelanggan::getData($data);

        return response()->json($tampil);

    }
}
