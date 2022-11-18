<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusTanah;

class StatusTanahController extends Controller
{

    public function index()
    {
        $stTanah = StatusTanah::all();
        return view('master.statusTanah.index', compact('stTanah'))->with('i');
    }

    public function store(Request $request)
    {
        StatusTanah::insert([
            'status_tanah' => $request->status_tanah,
            'keterangan'   => $request->keterangan
        ]);

        return redirect()->route('statusTanah.index');
    }

    public function show($status_tanah)
    {
        $statusTanah = StatusTanah::where('status_tanah', $status_tanah)->first();
        return response()->json($statusTanah);
    }

    public function update(Request $request, $status_tanah)
    {
        StatusTanah::where('status_tanah', $status_tanah)
                    ->update([
                        'status_tanah' => $request->status_tanah,
                        'keterangan'   => $request->keterangan
                    ]);

        return redirect()->route('statusTanah.index');
    }

    public function destroy($status_tanah)
    {
        StatusTanah::where('status_tanah', $status_tanah)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Status Tanah Berhasil Dihapus',
        ]);
    }

    public function print()
    {
        $stTanah = StatusTanah::all();
        return view('master.statusTanah.print', compact('stTanah'))->with('i');
    }

    public function cetak()
    {
        $stTanah = StatusTanah::all();
        return view('master.statusTanah.cetak', compact('stTanah'))->with('i');
    }

}
