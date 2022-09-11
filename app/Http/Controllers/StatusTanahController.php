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

    
    public function show($id)
    {
        $statusTanah = StatusTanah::find($id);
        return response()->json($statusTanah);
    }


    public function destroy($id)
    {
        $statusTanah = StatusTanah::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Status Tanah Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.statusTanah.print');
    }

}
