<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusMeter;

class StatusMeterController extends Controller
{
    public function index()
    {
        $stMeter = StatusMeter::all();
        return view('master.statusMeter.index', compact('stMeter'))->with('i');
    }

    public function store(Request $request)
    {
        StatusMeter::insert([
            'kd_statusmtr' => $request->kd_statusmtr,
            'keterangan'   => $request->keterangan
        ]);

        return redirect()->route('statusMeter.index');
    }

    public function show($kd_statusmtr)
    {
        $statusMeter = StatusMeter::where('kd_statusmtr', $kd_statusmtr)->first();
        return response()->json($statusMeter);
    }

    public function update(Request $request, $kd_statusmtr)
    {
        StatusMeter::where('kd_statusmtr', $kd_statusmtr)
                    ->update([
                        'kd_statusmtr' => $request->kd_statusmtr,
                        'keterangan'   => $request->keterangan
                    ]);

        return redirect()->route('statusMeter.index');
    }

    public function destroy($kd_statusmtr)
    {
        StatusMeter::where('kd_statusmtr', $kd_statusmtr)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Status Meter Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.statusMeter.print');
    }
}
