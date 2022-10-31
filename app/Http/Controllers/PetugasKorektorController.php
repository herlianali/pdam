<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasKorektor;
use App\Models\koreksiKorektor;
use App\Models\ViewSisa;
use App\Models\Dip;
use \Illuminate\Support\Facades\DB;

class PetugasKorektorController extends Controller
{
    public function index()
    {

        $cS    = Dip::getData();
        $petugasKorektor    = new PetugasKorektor();
        $korektor           = $petugasKorektor->showKorektor();
        $KoreksiKorektor    = new koreksiKorektor();
        $koreksi            = $KoreksiKorektor->showKoreksi();
        return view('master.petugasKorektor.index', compact('korektor','cS'))->with('i');

    }


    
    public function store(Request $request)
    {
        $aktif = isset($request->aktif) ? 1 : 0;
        PetugasKorektor::insert([
            'nip'           => $request->nip,
            'nama'          => $request->nama,
            'jabatan'       => $request->jabatan,
            'aktif'         => $aktif
        ]);
       
    }

    public function show($nip)
    {
        $pKorektor = PetugasKorektor::where('nip', $nip)->first();
        return response()->json($pKorektor);
    }

    public function laporan()
    {
        return view('master.petugasKorektor.laporan');
    }

    public function viewsisa()
    {
        
        $ViewSisa    = new ViewSisa();
        $Sisa        = $ViewSisa->showSisa();
        return view('master.petugasKorektor.viewsisa', compact('Sisa'))->with('i');
    }

    public function random()
    {
        return view('master.petugasKorektor.random');
    }

    public function koreksi()
    {

        $cS    = Dip::getData();
        $KoreksiKorektor    = new koreksiKorektor();
        $koreksi            = $KoreksiKorektor->showKoreksi();
      
        return view('master.petugasKorektor.koreksi', compact('koreksi','cS'))->with('i');
    }


    public function viewpts()
    {
        return view('master.petugasKorektor.viewpts');
    }

    public function monitoring()
    {
        return view('master.petugasKorektor.monitoring');
    }
}
