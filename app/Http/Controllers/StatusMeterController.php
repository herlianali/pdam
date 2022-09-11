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

    
    public function show($id)
    {
        $statusMeter = StatusMeter::find($id);
        return response()->json($statusMeter);
    }


    public function destroy($id)
    {
        $statusMeter = StatusMeter::findOrFail($id)->delete();
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
