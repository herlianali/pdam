<?php

namespace App\Http\Controllers;


use App\Models\Dip;
use Illuminate\Http\Request;
use App\Models\PetugasEntry;
use \Illuminate\Support\Facades\DB;

class PetugasEntryController extends Controller
{
    public function index()
    {
        $cPegawai    = Dip::getData();
        $pEntry  = PetugasEntry::getData();
        // dd($cariPegawai);
        return view('master.petugasEntry.index', compact(['pEntry', 'cPegawai']))->with('i');
    }

    public function store(Request $request)
    {
        $kd_ptgentry = "LT".$request->kd_ptgentry;
        $query = PetugasEntry::insert([
            'kd_ptgentry' => $kd_ptgentry,
            'nama'     => $request->nama,
            'nip'      => $request->nip,
            'aktif'    => $request->aktif
          
        ]);
        // dd($request->post());

        return redirect()->route('petugasEntry.index');
    }

    public function update(Request $request, $kd_ptgentry)
    {
        
        PetugasEntry::where(DB::raw("REPLACE(kd_ptgentry,' ','')"), $kd_ptgentry)->update([
            'kd_ptgentry'   => $request->kd_ptgentry,
            'nama'          => $request->nama,
            'nip'           => $request->nip,
            'aktif'         => $request->aktif
        ]);

        return redirect()->route('petugasEntry.index');
    }

    public function show($kd_ptgentry)
    {
        $ptsEntry = PetugasEntry::where('kd_ptgentry', $kd_ptgentry)->first();
        return response()->json($ptsEntry);
    }


    public function destroy($kd_ptgentry)
    {
        PetugasEntry::where(DB::raw("REPLACE(kd_ptgentry,' ','')"), $kd_ptgentry)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Entry Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.petugasEntry.print');
    }

}
