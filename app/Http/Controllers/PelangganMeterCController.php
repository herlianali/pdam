<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PelangganMeterC;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\DB;

class PelangganMeterCController extends Controller
{
    public function index()
    {
        $pelangganMTRC = PelangganMeterC::all();
        $date = Carbon::now()->format('Y-m-d H:i:s');
        return view('master.pelangganMeterC.index', compact('pelangganMTRC', 'date'))->with('i');
    }

    public function store(Request $request)
    {
        //dd(Session::get('username'));
        // $kd_ptgentry = "LT".$request->kd_ptgentry;
        $date = Carbon::now()->format('Y-m-d H:i:s');
         PelangganMeterC::insert([
            'no_plg'        => $request->no_plg,
            'ptgentri'      => Session::get('username'),
            'tgl_entry'     => $date,
            'aktif'         => 1
          
        ]);
        // dd($request->post());

        return redirect()->route('pelangganMeterC.index');
    }
    
    public function show($no_plg)
    {
        $pelMTRC = PelangganMeterC::where('no_plg', $no_plg)->first();
        return response()->json($pelMTRC);
    }


    public function destroy($no_plg)
    {
        PelangganMeterC::where(DB::raw("REPLACE(no_plg,' ','')"), $no_plg)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Jenis Panggilan Dinas Berhasil Dihapus',
        ]);
    }

    public function update(Request $request, $no_plg)
    {
        //dd($request->post());
        $date = Carbon::now()->format('Y-m-d h:i:s');
        $aktif = isset($request->aktif) ? 1 : 0;
        PelangganMeterC::where(DB::raw("REPLACE(no_plg,' ','')"), $no_plg)
                    ->update([
                        'no_plg'        => $request->no_plg,
                        // 'ptgentri'      => Session::get('username'),
                        // 'tgl_entry'     => $date,
                        'aktif'         => $aktif
                    ]);

        return redirect()->route('pelangganMeterC.index');
    }

    public function print()
    {
        return view('master.pelangganMeterC.print');
    }

}
