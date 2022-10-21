<?php

namespace App\Http\Controllers;

use App\Models\CekSurveyTarif;
use Illuminate\Http\Request;

class CekSurveyTarifController extends Controller
{
    public function index()
    {
        return view('master.cekSurveyTarif.index');
    }

    public function show($no_plg)
    {
        $cekSurveyTarif = CekSurveyTarif::select('njop', 'listrik', 'jalan')
                                        ->where('no_plg', $no_plg)
                                        ->where('aktif', 1)
                                        ->get()->first();
        return response()->json($cekSurveyTarif);
    }
}
