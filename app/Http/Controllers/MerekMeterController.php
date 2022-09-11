<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerekMeter;


class MerekMeterController extends Controller
{
    public function index()
    {
        $merkMeter = MerekMeter::all();
        return view('master.merekMeter.index', compact('merkMeter'))->with('i');
    }

    
    public function show($id)
    {
        $merekMeter = MerekMeter::find($id);
        return response()->json($merekMeter);
    }


    public function destroy($id)
    {
        $merekMeter = MerekMeter::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data MerekMeter Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.merekMeter.print');
    }

}
