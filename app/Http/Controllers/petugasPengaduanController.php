<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasPengaduan;

class petugasPengaduanController extends Controller
{
    public function index()
    {
        $pPengaduan = PetugasPengaduan::all();
        return view('master.petugasPengaduan.index', compact('pPengaduan'))->with('i');
    }

    
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
