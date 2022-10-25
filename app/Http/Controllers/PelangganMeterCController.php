<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganMeterC;

class PelangganMeterCController extends Controller
{
    public function index()
    {
        $plgMeterC = PelangganMeterC::all();
        return view('master.pelangganMeterC.index', compact('plgMeterC'))->with('i');
    }

    public function store(Request $request)
    {
        PelangganMeterC::insert([
            'no_pelanggan' => $request->no_pelanggan
        ]);

        return redirect()->route('pelangganMeterC.index');
    }

    
    public function show($id)
    {
        $plgnMeterC = PelangganMeterC::find($id);
        return response()->json($plgnMeterC);
    }


    public function destroy($id)
    {
        $plgnMeterC = PelangganMeterC::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Pelanggan Meter Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.pelangganMeterC.print');
    }

}
