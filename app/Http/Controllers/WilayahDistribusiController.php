<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\WilayahDistribusi;

class WilayahDistribusiController extends Controller
{

    public function index()
    {
        $wilDist = WilayahDistribusi::all();
        return view('master.wilayahDistribusi.index', compact('wilDist'))->with('i');
    }

    public function store(Request $request)
    {
        // dd($request->post());
        // validasi on progres

        WilayahDistribusi::insert([
            'kd_wilayah' => $request->kd_wilayah,
            'nama'       => $request->nama
        ]);

        return redirect()->route('wilayahDistribusi.index');
    }

    public function show($kd_wilayah)
    {
        $wilDistribusi = WilayahDistribusi::where('kd_wilayah', $kd_wilayah)->first();
        return response()->json($wilDistribusi);
    }

    public function update(Request $request, $kd_wilayah)
    {
        WilayahDistribusi::where('kd_wilayah', $kd_wilayah)
                    ->update([
                        'kd_wilayah' => $request->kd_wilayah,
                        'nama' => $request->nama
                    ]);

        return redirect()->route('wilayahDistribusi.index');
    }


    public function destroy($kd_wilayah)
    {
        WilayahDistribusi::where('kd_wilayah', $kd_wilayah)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Wilayah Distribusi Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.wilayahDistribusi.print');
    }
}
