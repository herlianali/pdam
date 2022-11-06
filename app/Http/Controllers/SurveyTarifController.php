<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\SurveyTarif;
use Carbon\Carbon;

class SurveyTarifController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('m-Y');
        return view('master.surveyTarif.index', compact('date'))->with('i');
    }

    
    public function show(Request $request)
    {
        $show = SurveyTarif::getData($request->periode, $request->zona, $request->jns_pelanggan, $request->no_bundel);
        return response()->json($show);
    }
  
    public function create(Request $request)
    {
        $foo = $request->jalan;
        $jalan = number_format((float)$foo, 2, '.', '');
        // dd($jalan);
        return view('master.surveyTarif.create', compact('jalan'));
    }

    public function cetaksurvey()
    {
        return view('master.surveyTarif.cetaksurvey');
    }
    
    public function lebihentri()
    {
        $total = SurveyTarif::count();
        $entri  = SurveyTarif::getDataEntri();
        return view('master.surveytarif.lebihentri', compact('entri','total'))->with('i');

    }
    
    public function cetaklebihentri()
    {
        return view('master.surveyTarif.cetaklebihentri');
    }
    public function datakosong()
    {
        $count = SurveyTarif::count();
        $confirmed = SurveyTarif::where('jalan', '0')->count();
        $data  = SurveyTarif::getDataKosong();
        $dataS  = Zona::all();
        return view('master.surveytarif.datakosong', compact('data','count','dataS','confirmed'))->with('i');
    
    }

    // public function show($no_plg)
    // {
    //     $survey = SurveyTarif::where('no_plg', $no_plg)->first();
    //     return response()->json($survey);
    // }

    public function cetakdk()
    {
        return view('master.surveyTarif.cetakdk');
    }
}
