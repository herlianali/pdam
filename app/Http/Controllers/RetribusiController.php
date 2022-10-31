<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retribusi;

class RetribusiController extends Controller
{
    public function index()
    {
        $retribus = Retribusi::all();
        return view('master.retribusi.index', compact('retribus'))->with('i');
    }

    public function store(Request $request)
    {
        $base      = new Retribusi;
        $autoIncre = (int)$base->AIncrement()+1;

        Retribusi::insert([
            'kd_retribusi' => $autoIncre,
            'rp_retribusi' => $request->retribusi
        ]);

        return redirect()->route('retribusi.index');
    }

    public function show($kd_retribusi)
    {
        $retribusi = Retribusi::where('kd_retribusi', $kd_retribusi)->first();
        return response()->json($retribusi);
    }

    public function update(Request $request, $kd_retribusi)
    {
        Retribusi::where('kd_retribusi', $kd_retribusi)
                    ->update([
                        'rp_retribusi' => $request->retribusi
                    ]);

        return redirect()->route('retribusi.index');
    }

    public function destroy($kd_retribusi)
    {
        Retribusi::where('kd_retribusi', $kd_retribusi)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Retribusi Berhasil Dihapus',
        ]);
    }

    public function print()
    {
        $retribus = Retribusi::all();
        return view('master.retribusi.print', compact('retribus'))->with('i');
    }

}
