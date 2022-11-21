<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use Illuminate\Http\Request;
use App\Models\PetugasKontrol;
use \Illuminate\Support\Facades\DB;

class PetugasKontrolController extends Controller
{
    public function index()
    {
        
        $cPegawai    = Dip::getData();
        $petugaskontrol = new PetugasKontrol();
        $petugas = $petugaskontrol->showPetugas();
        return view('master.petugasKontrol.index', compact(['petugas','cPegawai']))->with('i');
    }

    public function store(Request $request)
    {
        $satgas = isset($request->is_satgas) ? 1 : 0;
        $kd_ptgktrl = "TK".$request->kd_ptgktrl;
        $query = PetugasKontrol::insert([
            'kd_ptgktrl'    => $kd_ptgktrl,
            'nip'           => $request->nip,
            'nama'          => $request->nama,
            'is_satgas'     => $satgas 
        ]);
       

        return redirect()->route('petugasKontrol.index');
    }

    public function update(Request $request, $kd_ptgktrl)
    {
        $satgas = isset($request->is_satgas) ? 1 : 0;

        PetugasKontrol::where(DB::raw("REPLACE(kd_ptgktrl,' ','')"), $kd_ptgktrl)->update([
                            'kd_ptgktrl' => $request->kd_ptgktrl,
                            'nip'        => $request->nip,
                            'nama'       => $request->nama,
                            'is_satgas'  => $satgas
                        ]);

        return redirect()->route('petugasKontrol.index');
    }

    public function show($kd_ptgktrl)
    {
        $ptKontrol = PetugasKontrol::where('kd_ptgktrl', $kd_ptgktrl)->first();
        return response()->json($ptKontrol);
    }

    public function destroy($kd_ptgktrl)
    {
        
        PetugasKontrol::where(DB::raw("REPLACE(kd_ptgktrl,' ','')"), $kd_ptgktrl)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Kontrol Berhasil Dihapus',
        ]);
    }

   
    public function print(Request $request)
    {
        //dd($request->post());
        // $cPegawai    = Dip::getData();
        // $petugaskontrol = new PetugasKontrol();
        // $petugas = $petugaskontrol->showPetugas();
        // $wilayah = $petugaskontrol->getSemua();
        if ($request->wilayah='semua'){
            $wil = Dip::getSemua();
        }elseif($request->wilayah='timur'){
            $wil = Dip::getTimur();
        }elseif($request->wilayah='barat'){
            $wil = Dip::getBarat();
        }
        // dd($wil);
        return view('master.petugasKontrol.print', compact('wil'))->with('i');
    
    }
    

    public function cetak()
    {
        $cPegawai    = Dip::getData();
        $petugaskontrol = new PetugasKontrol();
        $petugas = $petugaskontrol->showPetugas();
        $wilayah = $petugaskontrol->getSemua();
        return view('master.petugasKontrol.cetak', compact(['petugas','cPegawai','wilayah']))->with('i');
    }
}
