<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyTarifController extends Controller
{
    public function index()
    {
        return view('master.surveyTarif.index');
    }
}
