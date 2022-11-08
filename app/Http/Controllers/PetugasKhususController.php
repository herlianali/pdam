<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use App\Models\JenisPelanggan;
use App\Models\PetugasKhusus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasKhususController extends Controller
{
    public function index()
    {
        $c_pegawai     = Dip::select('nip', 'nama')->where('kd_unitkrj', 'C31 ')->get();
        $jns_pelanggan = JenisPelanggan::select('jns_pelanggan', 'keterangan')->get();
        $jenis_pelanggan = new PetugasKhusus;
        $jenis = $jenis_pelanggan->getData();
        return view('master.petugasKhusus.index', compact(['jns_pelanggan', 'jenis', 'c_pegawai']))->with('i');
    }
    
    public function store(Request $request)
    {
        PetugasKhusus::insert([
            'nip'       => $request->nip,
            'tugas'     => $request->tugas,
            'jenis'     => $request->jenis_pelanggan,
            'jenis2'    => "S"
        ]);

        return redirect()->route('petugasKhusus.index');
    }

    public function show($nip)
    {
        $petugasKhusus = DB::select("select nip, tugas, jenis, jenis2 from PET_KHUSUS where REPLACE(nip,' ','') = ? order by nip desc", [$nip]);
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
        $petugasK = PetugasKhusus::where(DB::raw("REPLACE(nip,' ','')"), $nip)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Khusus Berhasil Dihapus',
            'data'    => $petugasK
        ]);
    }

    // validasi nip petugas khusu
    // public function check(){}

    
    public function print()
    {
        return view('master.petugasKhusus.print');
    }
}
