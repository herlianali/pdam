<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasKorektor;

class PetugasKorektorController extends Controller
{
    public function index()
    {
        $pKorektor = PetugasKorektor::all();
        return view('master.petugasKorektor.index', compact('pKorektor'))->with('i');
    }


    public function show($id)
    {
        $ptsKorektor = PetugasKorektor::find($id);
        return response()->json($ptsKorektor);
    }


    public function destroy($id)
    {
        $ptsKorektor = PetugasKorektor::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Berhasil Dihapus',
        ]);
    }
    public function laporan()
    {
        return view('master.petugasKorektor.laporan');
    }

    public function viewsisa()
    {
        return view('master.petugasKorektor.viewsisa');
    }

    public function random()
    {
        return view('master.petugasKorektor.random');
    }

    public function koreksi()
    {
        return view('master.petugasKorektor.koreksi');
    }


    public function viewpts()
    {
        return view('master.petugasKorektor.viewpts');
    }

    public function monitoring()
    {
        return view('master.petugasKorektor.monitoring');
    }
}
