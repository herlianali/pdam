<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringGunaPersil;
use App\Models\Rekening;

class MonitoringGunaPersilController extends Controller
{

    public function index()
    {
        $data = [];
        $formData = [];
        return view('BAMutasiPelanggan.monitoringGunaPersil.index', compact('data', 'formData'));
    }


    public function filter(Request $request)
    {
        $param = [
            'periode' => $request->periode,
            'stan_persil' => $request->stan_persil
        ];

        $data = Rekening::filter($request->thbl, $param);
        $formData = [
            'thbl'         => $request->thbl,
            'periode'      => $request->periode,
            'stan_persil'  => $request->stan_persil
        ];

        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringGunaPersil.index', compact('data', 'formData'));
    }

    public function preview(Request $request)
    {
        // $thbl = date_format($request->thbl, 'm/Y');
        $param = [
            'periode' => $request->periode,
            'stan_persil' => $request->stan_persil
        ];

        $data = Rekening::filter($request->thbl, $param);
        $formData = [
            'thbl'         => $request->thbl,
            'periode'      => $request->periode,
            'stan_persil'  => $request->stan_persil
        ];

        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringGunaPersil.preview', compact('data', 'formData'))->with('i');
    }

    public function cetak(Request $request)
    {
        // $thbl = date_format($request->thbl, 'm/Y');
        $param = [
            'periode' => $request->periode,
            'stan_persil' => $request->stan_persil
        ];

        $data = Rekening::filter($request->thbl, $param);
        $formData = [
            'thbl'         => $request->thbl,
            'periode'      => $request->periode,
            'stan_persil'  => $request->stan_persil
        ];

        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringGunaPersil.cetak', compact('data', 'formData'))->with('i');
    }
}
