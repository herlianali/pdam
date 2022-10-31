<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SurveyTarif extends Model
{
    use HasFactory;

    public $table = "SURVEY_TARIF";

    public function showTarif()
    {
        return DB::table($this->table)
        ->select('REKENING.no_plg','REKENING.nama','REKENING.alamat','REKENING.noPA','PB_DATA.lebarjalan','REKENING.KD_TARIF'.'SURVEY_TARIF.listrik'.'SURVEY_TARIF.NJOP')
        ->join ('REKENING', 'REKENING.no_plg', '=', 'SURVEY_TARIF.no_plg')
        ->join ('PB_DATA', 'PB_DATA.listrik', '=', 'SURVEY_TARIF.listrik')
        ->first();
    }

    public function getByNopel($nopel)
    {
        return DB::table($this->table)
                    ->select('njop', 'listrik', 'lebarjalan', 'no_daftarpb')
                    ->where('nopel', 'LIKE', $nopel)
                    ->first();
    }
}
