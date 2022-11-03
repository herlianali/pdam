<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use Illuminate\Http\Request;
use App\Models\PetugasKorektor;

class PetugasKorektorController extends Controller
{
    public function index()
    {
        $pKorektor = PetugasKorektor::all();
        return view('master.petugasKorektor.index', compact('pKorektor'))->with('i');
    }

    public function store(Request $request)
    {
        PetugasKorektor::insert([
            'nip'       => $request->nip,
            'jabatan'   => $request->jabatan,
            'aktif'     => $request->aktif
        ]);

    public function show($id)
    {
        $ptsKorektor = PetugasKorektor::find($id);
        return response()->json($ptsKorektor);
    }


    public function destroy($id)
    {
        $pKorektor = PetugasKorektor::where('nip', $nip)->first();
        return response()->json($pKorektor);
    }

    public function laporan()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.laporan', compact('date'))->with('i');
    }

    public function viewsisa()
    {
        return view('master.petugasKorektor.viewsisa');
    }

    public function random()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.random', compact('date'))->with('i');
    }

    public function koreksi()
    {
        return view('master.petugasKorektor.koreksi');
    }


    public function viewpts()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.viewpts', compact('date'))->with('i');
    }

    public function monitoring()
    {
        return view('master.petugasKorektor.monitoring');
    }
}
