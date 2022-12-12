<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;
use App\Models\Rekening;
use App\Models\SurveyTarif;
use Carbon\Carbon;

class SurveyTarifController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('m/Y');
        return view('master.surveyTarif.index', compact('date'))->with('i');
    }



    public function show(Request $request)
    {
        $periodeSplit = explode("/", $request->periode);
        $periode      = $periodeSplit[1].$periodeSplit[0];
        $rekening     = Rekening::getData($periode, $request->no_bundel, $request->zona, $request->jns_pelanggan);
        $no_plg       = $rekening->no_plg;
        $alamat       = trim($rekening->jalan, ' ').' '.trim($rekening->gang, ' ').' '.trim($rekening->nomor, ' ');
        $survey_tarif = SurveyTarif::getByPlg($no_plg);
        $lebar        = number_format($survey_tarif->jalan, 2);
        $data = array(
            "no_plg"      => $no_plg,
            "nama"        => $rekening->nama,
            "alamat"      => $alamat,
            "no_pa"       => $rekening->no_pa,
            "lebar_jalan" => $lebar,
            "tarif_lama"  => $rekening->kd_tarif,
            "kwh"         => $survey_tarif->listrik,
            "njop"        => $survey_tarif->njop
        );
        return response()->json($data);
    }

    public function create(Request $request)
    {
        $foo   = $request->jalan;
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
        // $total = SurveyTarif::count();
        // $entri  = SurveyTarif::getDataEntri();
        $periode = Rekening::where('periode', '122005')->count();
        $kd_tarif = Rekening::where('kd_tarif', ['21', '31', '41', '42'])->count();
        $total = $periode + $kd_tarif;
        dd($total);
        //return view('master.surveytarif.lebihentri', compact('entri','total'))->with('i');

    }

    public function cetaklebihentri()
    {
        return view('master.surveyTarif.cetaklebihentri');
    }
    public function datakosong()
    {
        $jalan = SurveyTarif::where('jalan', '0')->count();
        $listrik = SurveyTarif::where('listrik', '0')->count();
        $count = $jalan + $listrik;
        $data  = SurveyTarif::getDataKosong();
        $dataS  = Zona::all();
        return view('master.surveytarif.datakosong', compact('data','count','dataS'))->with('i');

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

    public function editPln()
    {
        
        return view('master.surveyTarif.editpln');
    }

    public function showEditPln(Request $request)
    {
        return response()->json($request->post());
    }
}
