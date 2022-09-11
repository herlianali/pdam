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

    
    public function show($id)
    {
        $statusAir = StatusAir::find($id);
        return response()->json($statusAir);
    }


    public function destroy($id)
    {
        $statusAir = StatusAir::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Status Air Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.statusAir.print');
    }

}
