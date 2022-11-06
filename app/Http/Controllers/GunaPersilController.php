<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GunaPersil;
use App\Models\JenisTarif;
use App\Models\StatusAir;

class GunaPersilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd_gunapersil = GunaPersil::select('kd_gunapersil', 'keterangan')->get();
        $guna_persil = new GunaPersil;
        $guna = $guna_persil->getData();
        $kd_tarif = JenisTarif::select('kd_tarif', 'jns_tarif')->get();
        $kode_tarif = new GunaPersil;
        $kode = $kode_tarif->getData();
        return view('master.gunaPersil.index', compact('kd_gunapersil', 'guna', 'kd_tarif', 'kode'))->with('i');
    }

    public function store(Request $request)
    {
        //dd($request->post());
        GunaPersil::insert([
            'kd_gunapersil'     => $request->kd_gunapersil,
            'keterangan'        => $request->keterangan,
            'kd_gunapersil_i'   => $request->kd_gunapersil_i,
            'kd_tarif'          => $request->kd_tarif,
            'jns_persil'        => "a"
        ]);

        return redirect()->route('gunaPersil');
    }

    public function show($id)
    {
        $gunaPersil = GunaPersil::where('kd_gunapersil', $id)->first();
        return response()->json($gunaPersil);
    }

    public function update(Request $request, $kd_gunapersil)
    {
        //dd($request->post());
        GunaPersil::where('kd_gunapersil', $kd_gunapersil)
                    ->update([
                        'kd_gunapersil'     => $request->kd_gunapersil,
                        'keterangan'        => $request->keterangan,
                        'kd_gunapersil_i'   => $request->kd_gunapersil_i,
                        'kd_tarif'          => $request->kd_tarif
                    ]);

        return redirect()->route('gunaPersil');
    }

    public function destroy($kd_gunapersil)
    {
        GunaPersil::where('kd_gunapersil', $kd_gunapersil)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Guna Persil Berhasil Dihapus',
        ]);
    }

    public function printPreview(Request $request)
    {
        if($request->filter == "semua"){
            $filter = GunaPersil::all();
        }else{
            $filter = GunaPersil::filter($request->start, $request->end);
        }

        return view('master.gunaPersil.print', compact('filter'));
    }

    public function print()
    {
        // $kd_gunapersil = GunaPersil::select('kd_gunapersil', 'keterangan')->get();
        // $guna_persil = new GunaPersil;
        // $guna = $guna_persil->getData();
        // $kd_tarif = JenisTarif::select('kd_tarif', 'jns_tarif')->get();
        // $kode_tarif = new GunaPersil;
        // $kode = $kode_tarif->getData();
        return view('master.gunaPersil.print')->with('i');
    }
}
