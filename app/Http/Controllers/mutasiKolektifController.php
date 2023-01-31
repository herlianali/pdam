<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiKolektif;
use App\Models\DilM;
use Carbon\Carbon;

class MutasiKolektifController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('Y-m-d');
        $getlast = new MutasiKolektif;
        $no = (int)$getlast->getLast()+1;
        $getRet = $getlast->getRet();
        $data = [];
        return view('BAMutasiPelanggan.mutasiKolektif.index', compact('data', 'date', 'getlast', 'no', 'getRet'))->with('i');
    }

    public function show($no_plg)
    {
        $getByNoPlg = DilM::getNoPlg($no_plg);
        
        return response()->json($getByNoPlg);
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_plg'            => 'required',
            'zona'              => 'required',
            'jns_pelanggan'     => 'required',
            'no_bundel'         => 'required',
            'nama'              => 'required',
            'alamat_pemohon'    => 'required',
            'zonabaru'          => 'required',
            'jnsplgbaru'        => 'required',
            'nobundelbaru'      => 'required',
            'kdretlama'         => 'required',
            'rpretlama'         => 'required',
            'kdretbaru'         => 'required',
            'rpretbaru'         => 'required'
        ]);

        DilM::insert([
            'no_plg'            => $request->no_plg,
            'zona'              => $request->zona,
            'jns_pelanggan'     => $request->jns_pelanggan,
            'no_bundel'         => $request->no_bundel,
            'nama'              => $request->nama,
            'alamat_pemohon'    => $request->alamat_pemohon,
            'zonabaru'          => $request->zonabaru,
            'jnsplgbaru'        => $request->jnsplgbaru,
            'nobundelbaru'      => $request->nobundelbaru,
            'kdretlama'         => $request->kdretlama,
            'rpretlama'         => $request->rpretlama,
            'kdretbaru'         => $request->kdretbaru,
            'rpretbaru'         => $request->rpretbaru
        ]);

        return redirect()->route('mutasiKolektif.index');
    }

    public function previewBAMutasiKolektif()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.previewBA');
    }
    public function previewLampiranMutasiKolektif()
    {
        $date = Carbon::now()->format('d-m-Y');
        return view('BAMutasiPelanggan.mutasiKolektif.previewLampiran', compact('date'))->with('i');
    }
    public function cetakBAMutasiKolektif()
    {
        return view('BAMutasiPelanggan.mutasiKolektif.cetakBA')->with('i');
    }
    public function cetakLampiranMutasiKolektif()
    {
        $date = Carbon::now()->format('d-m-Y');
        return view('BAMutasiPelanggan.mutasiKolektif.cetakLampiran', compact('date'))->with('i');
    }
}
