<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusAir;

class StatusAirController extends Controller
{
    public function index()
    {
        $stAir = StatusAir::all();
        return view('master.statusAir.index', compact('stAir'))->with('i');
    }

    public function store(Request $request)
    {
        StatusAir::insert([
            'kd_statusair' => $request->kd_statusair,
            'keterangan'   => $request->keterangan
        ]);

        return redirect()->route('statusAir.index');
    }

    public function show($kd_statusair)
    {
        $statusAir = StatusAir::where('kd_statusair', $kd_statusair)->first();
        return response()->json($statusAir);
    }

    public function update(Request $request, $kd_statusair)
    {
        StatusAir::where('kd_statusair', $kd_statusair)
                    ->update([
                        'kd_statusair' => $request->kd_statusair,
                        'keterangan'   => $request->keterangan
                    ]);

        return redirect()->route('statusAir.index');
    }

    public function destroy($kd_statusair)
    {
        StatusAir::where('kd_statusair', $kd_statusair)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Status Air Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        $stAir = StatusAir::all();
        return view('master.statusAir.print', compact('stAir'))->with('i');
    }

}
