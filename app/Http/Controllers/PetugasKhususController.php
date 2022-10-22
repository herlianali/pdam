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
        $jenis_pelanggan = new PetugasKhusus;
        $jenis = $jenis_pelanggan->getData();
        return view('master.petugasKhusus.index', compact(['jns_pelanggan', 'jenis', 'c_pegawai']))->with('i');
        //dd($ZZ);
    }

    public function store(Request $request)
    {
        // dd($request->post());

        PetugasKhusus::insert([
            'nip'       => $request->nip,
            'tugas'     => $request->tugas,
            'jenis'     => $request->jenis_pelanggan,
            'jenis2'    => "S"
        ]);

        return redirect()->route('petugasKhusus');
    }

    public function show($nip)
    {
        $petugasKhusus = Dip::where('nip', $nip)->first();
        return response()->json($petugasKhusus);
    }

    public function update(Request $request, $nip)
    {
        PetugasKhusus::where('nip', $nip)
                    ->update([
                        'nip'       => $request->nip,
                        'tugas'     => $request->tugas,
                        'jenis'     => $request->jenis,
                        'jenis2'    => "S"
                    ]);

        return redirect()->route('petugasKhusus.index');
    }

    public function destroy($nip)
    {
        PetugasKhusus::where('nip', $nip)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Khusus Berhasil Dihapus',
        ]);
    }
    
    public function print()
    {
        return view('master.petugasKhusus.print');
    }
}
