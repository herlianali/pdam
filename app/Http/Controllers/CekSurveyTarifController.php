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

    public function show($nopel)
    {
        $cekSurveyTarif = CekSurveyTarif::select('njop', 'listrik', 'lebarjalan')
                                        ->where('nopel', $nopel)
                                        ->first();
        return response()->json($cekSurveyTarif);
    }
}
