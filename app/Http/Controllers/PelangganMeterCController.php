<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganMeterC;
use DateTime;

class PelangganMeterCController extends Controller
{
    public function index()
    {
        $pelangganMTRC = PelangganMeterC::all();
        return view('master.pelangganMeterC.index', compact('pelangganMTRC'))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_plg'        => 'required',
            'ptgentri'      => 'required',
            'tgl_entry'     => 'required',
            'aktif'         => 'required'
        ]);

        PelangganMeterC::insert([
            'no_plg'        => $request->no_plg,
            'ptgentri'      => "ADMIN",
            'tgl_entry'     => $request->tgl_entry,
            'aktif'         => "1"
        ]);

        return redirect()->route('jenisPelanggan.index');
    }
    
    public function show($no_plg)
    {
        $pelangganMtrC = PelangganMeterC::where('no_plg', $no_plg)->first();
        return response()->json($pelangganMtrC);
    }


    public function destroy($no_plg)
    {
        PelangganMeterC::where('no_plg', $no_plg)->delete();

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
