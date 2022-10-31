<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use Illuminate\Http\Request;
use App\Models\PetugasKontrol;

class PetugasKontrolController extends Controller
{
    public function index()
    {
        $c_data = Dip::getData();
        $petugaskontrol = new PetugasKontrol();
        $petugas = $petugaskontrol->showPetugas();
        return view('master.petugasKontrol.index', compact(['petugas', 'c_data']))->with('i');
    }

    public function store(Request $request)
    {
        // $petugaskontrol = new PetugasKontrol();
        // $kodeakhir = $petugaskontrol->getLastKode() + 1;
        $satgas = isset($request->is_satgas) ? 1 : 0;
        PetugasKontrol::insert([
            'kd_ptgktrl' => $request->kd_ptgktrl,
            'nip'        => $request->nip,
            'nama'       => $request->nama,
            'is_satgas'  => $satgas
        ]);

        return redirect()->route('petugasKontrol.index');
    }

    public function update(Request $request, $kd_ptgktrl)
    {
        $satgas = isset($request->is_satgas) ? 1 : 0;

        PetugasKontrol::where('kd_ptgktrl', $kd_ptgktrl)
                        ->update([
                            'kd_ptgktrl' => $request->kd_ptgktrl,
                            'nip'        => $request->nip,
                            'nama'       => $request->nama,
                            'is_satgas'  => $satgas
                        ]);

        return redirect()->route('petugasKontrol.index');
    }

    public function show($kd_ptgktrl)
    {
        $ptKontrol = PetugasKontrol::where('kd_ptgktrl',$kd_ptgktrl)->first();
        return response()->json($ptKontrol);
    }

    public function destroy($kd_ptgktrl)
    {
        PetugasKontrol::where('kd_ptgktrl',$kd_ptgktrl)->delete();

        return redirect()->route('petugasKontrol.index');
    }

    public function print()
    {
        return view('master.petugasKontrol.print');
    }
}
