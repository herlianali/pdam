<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PelangganMeterC;
use Carbon\Carbon;
use \Illuminate\Support\Facades\DB;

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

        $tgl = Carbon::now()->format('Y-m-d H:i:s');
        PelangganMeterC::insert([
            'no_plg'        => $request->no_plg,
            'ptgentri'      => $request->user_login,
            'tgl_entry'     => $tgl,
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
        PelangganMeterC::where(DB::raw("REPLACE(no_plg,' ','')"), $no_plg)->delete();
        // PelangganMeterC::where('no_plg', $no_plg)->delete();
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
