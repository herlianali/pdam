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

    
    public function show($id)
    {
        $wilDistribusi = WilayahDistribusi::find($id);
        return response()->json($$wilDistribusi);
    }


    public function destroy($id)
    {
        $swilDistribusi = WilayahDistribusi::findOrFail($id)->delete();
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
