<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SurveyTarif extends Model
{
    use HasFactory;

    public $table = "SURVEY_TARIF";

    public static function getDataKosong()
    {
        return DB::table("SURVEY_TARIF")
                    ->select('DIL.zona','DIL.no_bundel','SURVEY_TARIF.no_plg','SURVEY_TARIF.listrik','SURVEY_TARIF.jalan')
                    ->join ('DIL', 'DIL.no_plg', '=', 'SURVEY_TARIF.no_plg')
                    ->where('SURVEY_TARIF.listrik','=','0')
                    ->where('SURVEY_TARIF.jalan','=','0')
                    ->orderBy('zona','asc')
                    ->limit(900)
                    ->get();
    }

    public static function getByPlg($no_plg)
    {
        return DB::table("SURVEY_TARIF")
                    ->whereRaw("NO_PLG = ".$no_plg."")
                    ->first();
    }

    public static function getDataEntri()
    {
        return DB::table("SURVEY_TARIF")
                    ->select('SURVEY_TARIF.no_plg','REKENING.kd_tarif','REKENING.no_bundel','REKENING.zona')
                    ->join ('REKENING', 'REKENING.no_plg', '=', 'SURVEY_TARIF.no_plg')
                    ->where('REKENING.periode','=','122005')
                    ->whereNotIn('REKENING.kd_tarif',['21','31','41','42'])
                    // ->orderBy('zona','asc')
                    // ->orderBy('no_bundel','asc')
                    ->limit(500)
                    ->get();
    }

    public function getByNopel($nopel)
    {
        return DB::table($this->table)
                    ->select('njop', 'listrik', 'lebarjalan', 'no_daftarpb')
                    ->where('nopel', 'LIKE', $nopel)
                    ->first();
    }
}
