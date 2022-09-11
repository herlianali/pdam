<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyTarif;

class SurveyTarifController extends Controller
{
    public function index()
    {
        return view('master.surveyTarif.index');
    }
  
    public function create()
    {
        return view('master.surveyTarif.create');
    }

    public function cetaksurvey()
    {
        return view('master.surveyTarif.cetaksurvey');
    }
    
    public function lebihentri()
    {
        return view('master.surveyTarif.lebihentri');
    }
    
    public function cetaklebihentri()
    {
        return view('master.surveyTarif.cetaklebihentri');
    }

    public function datakosong()
    {
        return view('master.surveyTarif.datakosong');
    }
    public function cetakdk()
    {
        return view('master.surveyTarif.cetakdk');
    }
}
