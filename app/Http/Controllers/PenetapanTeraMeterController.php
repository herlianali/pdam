<?php

namespace App\Http\Controllers;

use App\Models\PenetapanTeraMeter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenetapanTeraMeterController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('Y-m-d');
        $getlast = new PenetapanTeraMeter;
        $no = (int)$getlast->getLast()+1;
        //dd($no);
        return view('master.penetapanTeraMeter.index', compact('date', 'getlast', 'no'))->with('i');
    }

    public function store(Request $request)
    {
        //dd($request->post());
        PenetapanTeraMeter::insert([
            'no_tera'           => $request->no_tera,
            'tgl_tera'          => $request->date,
            'no_bonc'           => $request->no_bonc,
            'no_plg'            => $request->no_plg,
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'tarif'             => $request->tarif,
            'uk_meter'          => $request->uk_meter,
            'biaya_tera'        => $request->biaya_tera,
            'ppn'               => $request->ppn,
            'total_biaya'       => $request->total_biaya,
            'nama_pengadu'      => $request->nama_pengadu,
            'alamat_pengadu'    => $request->alamat_pengadu,
            'telepon'           => $request->telepon
        ]);
        
        return redirect()->route('penetapanTeraMeter');
    }

    public function show($no_bonc)
    {
        $penetapanTeraMeter = PenetapanTeraMeter::select('no_plg', 'nama', 'alamat', 'tarif', 'uk_meter', 'biaya_tera', 'ppn', 'total_biaya')
                                        ->where('no_bonc', $no_bonc)
                                        ->first();
        return response()->json($penetapanTeraMeter);
    }

    public function print()
    {
        return view('master.penetapanTeraMeter.print');
    }
    public function create()
    {
        return view('master.penetapanTeraMeter.create');
    }
    
}
