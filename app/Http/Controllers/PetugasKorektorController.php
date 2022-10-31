<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use Illuminate\Http\Request;
use App\Models\PetugasKorektor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PetugasKorektorController extends Controller
{
    public function index()
    {
        $c_pegawai  = Dip::getData();
        $pKorektor  = PetugasKorektor::all();
        
        return view('master.petugasKorektor.index', compact('pKorektor', 'c_pegawai'))->with('i');
    }

    public function store(Request $request)
    {
        PetugasKorektor::insert([
            'nip'       => $request->nip,
            'jabatan'   => $request->jabatan,
            'aktif'     => $request->aktif
        ]);

        return redirect()->route('PetugasKorektor.index');
    }

    public function show($nip)
    {
        $petugasKorektor = DB::select("select nip, jabatan, aktif from PTGKOREKTOR_NEW where REPLACE(nip,' ','') = ? order by nip desc", [$nip]);
        return response()->json($petugasKorektor);
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
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.laporan', compact('date'))->with('i');
    }

    public function viewsisa()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.viewsisa', compact('date'))->with('i');
    }

    public function random()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.random', compact('date'))->with('i');
    }

    public function koreksi()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.koreksi', compact('date'))->with('i');
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
