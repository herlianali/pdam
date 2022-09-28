<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use App\Models\PetugasPengaduan;

class PetugasPengaduanController extends Controller
{
    public function index()
    {
        $pPengaduan = PetugasPengaduan::all();
        return view('master.petugasPengaduan.index', compact('pPengaduan'))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_ptgcs' => 'required',
            'nip'        => 'required',
            'nama'       => 'required',
        ]);

        PetugasPengaduan::insert([
            'kd_ptgcs' => $request->kd_ptgcs,
            'nip'      => $request->nip,
            'nama'     => $request->nama,
            'aktif'    => $request->aktif,
            'iscs'     => 0
        ]);

        // var_dump($request);
        return redirect()->route('petugasPengaduan.index');
    }

    // public function update(Request $request, $kd_ptgcs)
    // {
    //     PetugasPengaduan::where('kd_ptgcs', $kd_ptgcs)
    //                     ->update($request->except(['_token', '_method']));

    //     return redirect()->route('petugasPengaduan.index');
    // }

    public function show($id)
    {
        $ptsPengaduan = PetugasPengaduan::find($id);
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
