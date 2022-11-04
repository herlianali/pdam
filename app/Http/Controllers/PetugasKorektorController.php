<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use App\Models\koreksiKorektor;
use Illuminate\Http\Request;
use App\Models\PetugasKorektor;
use Carbon\Carbon;

class PetugasKorektorController extends Controller
{
    public function index()
    {
        $cS    = Dip::getData();
        $pKorektor = new PetugasKorektor();
        $korektor = $pKorektor->showKorektor();
        return view('master.petugasKorektor.index', compact('cS', 'korektor'))->with('i');
    }

    public function show($nip)
    {
        $petKorektor = PetugasKorektor::where('nip', $nip)->first();
        return response()->json($petKorektor);
    }


    public function destroy($nip)
    {
        $pKorektor = PetugasKorektor::where('nip', $nip)->first();
        return response()->json($pKorektor);
    }

    public function laporan()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.laporan', compact('date'))->with('i');
    }

    public function viewsisa()
    {
        return view('master.petugasKorektor.viewsisa');
    }

    public function random()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.random', compact('date'))->with('i');
    }

    public function koreksi()
    {
        $cS    = Dip::getData();
        $Koreksi = new koreksiKorektor();
        $koreksi = $Koreksi->showKoreksi();
        return view('master.petugasKorektor.koreksi', compact('cS', 'koreksi'))->with('i');
    }


    public function viewpts()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.viewpts', compact('date'))->with('i');
    }

    public function monitoring()
    {
        return view('master.petugasKorektor.monitoring');
    }
}
