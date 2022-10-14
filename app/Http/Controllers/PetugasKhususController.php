<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use App\Models\JenisPelanggan;
use App\Models\PetugasKhusus;
use Illuminate\Http\Request;

class PetugasKhususController extends Controller
{
    public function index()
    {
        $c_pegawai     = Dip::select('nip', 'nama')->where('kd_unitkrj', 'C31 ')->get();
        $jns_pelanggan = JenisPelanggan::select('jns_pelanggan', 'keterangan')->get();
        return view('master.petugasKhusus.index', compact(['jns_pelanggan', 'c_pegawai']));
    }

    public function store(Request $request)
    {
        // dd($request->post());

        PetugasKhusus::insert([
            'nip' => $request->nip,
            'tugas' => $request->tugas,
            'jenis' => $request->jenis_pelanggan,
            'jenis2' => "S"
        ]);

        return redirect()->route('petugasKhusus');
    }
}
