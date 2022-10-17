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

    public function store(Request $request)
    {
        MerekMeter::insert([
            'kd_merk' => $request->kd_merk,
            'merk'    => $request->merk
        ]);

        return redirect()->route('merekMeter.index');
    }

    public function show($kd_merk)
    {
        $merekMeter = MerekMeter::where('kd_merk', $kd_merk)->first();
        return response()->json($merekMeter);
    }

    public function update(Request $request, $kd_merk)
    {
        MerekMeter::where('kd_merk', $kd_merk)
                    ->update([
                        'kd_merk' => $request->kd_merk,
                        'merk'    => $request->merk
                    ]);

        return redirect()->route('merekMeter.index');
    }

    public function destroy($kd_merk)
    {
        MerekMeter::where('kd_merk', $kd_merk)->delete();

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
