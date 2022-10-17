<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use Illuminate\Http\Request;
use App\Models\PetugasPengaduan;

class PetugasPengaduanController extends Controller
{
    public function index()
    {

        $cPegawai    = Dip::getData();
        $pPengaduan  = PetugasPengaduan::getData();
        // dd($cariPegawai);
        return view('master.petugasPengaduan.index', compact(['pPengaduan', 'cPegawai']))->with('i');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'kode_ptgcs' => 'required',
        //     'nip'        => 'required',
        //     'nama'       => 'required',
        // ]);

        $kd_ptgcs = "LT".$request->kd_ptgcs;
        $query = PetugasPengaduan::insert([
            'kd_ptgcs' => $kd_ptgcs,
            'nip'      => $request->nip,
            'nama'     => $request->nama,
            'aktif'    => $request->aktif,
            'iscs'     => 0
        ]);

        return redirect()->route('petugasPengaduan.index');
    }

    // public function update(Request $request, $kd_ptgcs)
    // {
    //     PetugasPengaduan::where('kd_ptgcs', $kd_ptgcs)
    //                     ->update($request->except(['_token', '_method']));

    //     return redirect()->route('petugasPengaduan.index');
    // }

    public function show($nip)
    {
        $ptsPengaduan = PetugasPengaduan::where('nip', $nip)->first();
        return response()->json($ptsPengaduan);
    }


    public function destroy($id)
    {
        $ptsPengaduan = petugasPengaduan::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.petugasPengaduan.print');
    }

}
