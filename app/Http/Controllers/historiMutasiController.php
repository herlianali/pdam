<?php

namespace App\Http\Controllers;

use App\Models\BaMutasi;
use Illuminate\Http\Request;
use App\Models\DilM;
use Log;

class HistoriMutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        return view('BAMutasiPelanggan.historiMutasi.index', compact('data'));
    }

    public function show(Request $request)
    {
        $getByPlg = DilM::getByPlg($request->no_plg);
        $alamat = trim($getByPlg->jalan, ' ') . ' no. ' . trim($getByPlg->gang) . ' ' . trim($getByPlg->nomor) . ' ' . trim($getByPlg->notamb);
        $formHistory = array(
            'no_pelanggan'  => $getByPlg->no_plg,
            'nama'          => $getByPlg->nama,
            'alamat'        => $alamat,
            'tarif'         => $getByPlg->kd_tarif,
            'jns_pelanggan' => $getByPlg->jns_pelanggan,
            'zona'          => $getByPlg->zona,
        );

        $tableHistory = BaMutasi::getBaMutasiHistory($request->no_plg);


        $data = array(
            'formHistory'  => $formHistory,
            'tablehistory' => $tableHistory,
        );

        // return response()->json($data);
        Log::info($data);
        return view('BAMutasiPelanggan.historiMutasi.index', compact('data'));
    }
}
