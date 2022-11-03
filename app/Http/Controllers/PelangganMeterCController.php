<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PelangganMeterC;
use Carbon\Carbon;


class PelangganMeterCController extends Controller
{
    public function index()
    {
        $pelangganMTRC = PelangganMeterC::all();
        return view('master.pelangganMeterC.index', compact('pelangganMTRC'))->with('i');
    }

    
    public function show($id)
    {
        $pelangganMtrC = PelangganMeterC::where('no_plg', $no_plg)->first();
        return response()->json($pelangganMtrC);
    }


    public function destroy($no_plg)
    {
        $plgnMeterC = PelangganMeterC::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Retribusi Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.pelangganMeterC.print');
    }

}
