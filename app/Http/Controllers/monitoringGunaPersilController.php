<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringGunaPersil;
use App\Models\Rekening;
use Carbon\Carbon;
use Log;

class MonitoringGunaPersilController extends Controller
{
    
    public function index()
    {
        $data = [];
        return view('BAMutasiPelanggan.monitoringGunaPersil.index', compact('data'));
    }


    public function filter(Request $request)
    {
        // $thbl = date_format($request->thbl, 'm/Y');
        $param = [
            'periode' => $request->periode,
            'stan_persil' => $request->stan_persil
        ];
        
        $data = Rekening::filter($request->thbl, $param);

        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringGunaPersil.index', compact('data'));
    }

    public function preview(Request $request)
    {
        // $thbl = date_format($request->thbl, 'm/Y');
        $param = [
            'periode' => $request->periode,
            'stan_persil' => $request->stan_persil
        ];
        
        $data = Rekening::filter($request->thbl, $param);

        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringGunaPersil.preview', compact('data'))->with('i');
    }

    public function cetak(Request $request)
    {
        // $thbl = date_format($request->thbl, 'm/Y');
        $param = [
            'periode' => $request->periode,
            'stan_persil' => $request->stan_persil
        ];
        
        $data = Rekening::filter($request->thbl, $param);

        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringGunaPersil.cetak', compact('data'))->with('i');
    }
}
