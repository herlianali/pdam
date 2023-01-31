<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringBAMutasiPerorangan;
use Carbon\Carbon;

class MonitoringBAMutasiPeroranganController extends Controller
{
    public function index()
    {
        $data = [];
        $formData = [];
        $date = Carbon::now()->format('Y-m-d');
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.index', compact('data', 'formData', 'date'))->with('i');
    }

    public function show(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $data = MonitoringBAMutasiPerorangan::getData($request->no_bamutasi);
        //dd($data);
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.index', compact('data', 'date'))->with('i');
    }

    public function preview(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $data = MonitoringBAMutasiPerorangan::filter($request->no_bamutasi);
        $formData = array(
            'no_bamutasi'   => $request->no_bamutasi
        );
        dd($formData);
        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.preview', compact('date', 'data', 'formData'))->with('i');
    }

    public function cetak(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $data = MonitoringBAMutasiPerorangan::filter($request->no_bamutasi);
        $formData = array(
            'no_bamutasi'   => $request->no_bamutasi
        );
        //dd($data);
        // return response()->json($data);
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.cetak', compact('date', 'data', 'formData'))->with('i');
    }

    public function create()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.create');
    }
    public function persetujuan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.persetujuan');
    }
    public function edit()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.edit');
    }
    public function previewBA()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewBA');
    }
    public function previewUsulan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewUsulan');
    }
    public function previewPenolakan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewPenolakan');
    }
    public function previewBATarif()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewBATarif');
    }
    public function previewPanggilan()
    {
        return view('BAMutasiPelanggan.monitoringBAMutasiPerorangan.previewPanggilan');
    }
}
