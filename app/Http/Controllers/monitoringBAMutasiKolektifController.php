<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringBAMutasiKolektif;
use Carbon\Carbon;

class MonitoringBAMutasiKolektifController extends Controller
{

    public function index()
    {
        $data = [];
        $date = Carbon::now()->format('Y-m-d');
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.index', compact('date', 'data'))->with('i');
    }

    public function show(Request $request)
    {
        //$monPelanggan = MonitoringPelanggan::where('no_plg', $no_plg)->first();
        $date = Carbon::now()->format('Y-m-d');
        $data = MonitoringBAMutasiKolektif::getBA($request->no_bamutkol);
        //dd($data);
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.index', compact('data', 'date'))->with('i');
    }

    public function create()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.create');
    }


    public function persetujuan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.persetujuan');
    }

    public function preview()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.preview');
    }

    public function previewUsulan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.previewUsulan');
    }

    public function previewLampiran()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.previewLampiran');
    }

    public function previewPdinas()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiKolektif.previewPdinas');
    }
}
