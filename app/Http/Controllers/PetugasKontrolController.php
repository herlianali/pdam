<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasKontrol;

class PetugasKontrolController extends Controller
{
    public function index()
    {
        $ptgsKontrol = PetugasKontrol::all();
        return view('master.petugasKontrol.index', compact('ptgsKontrol'))->with('i');
    }

    
    public function show($id)
    {
        $ptKontrol = PetugasKontrol::find($id);
        return response()->json($ptKontrol);
    }


    public function destroy($id)
    {
        $ptKontrol = PetugasKontrol::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Kontrol Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.petugasKontrol.print');
    }
}
