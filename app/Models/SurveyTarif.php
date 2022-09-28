<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SurveyTarif extends Model
{
    use HasFactory;

    public $table = "pb_data";

    public function getByNopel($nopel)
    {
        return DB::table($this->table)
                    ->select('njop', 'listrik', 'lebarjalan', 'no_daftarpb')
                    ->where('nopel', 'LIKE', $nopel)
                    ->first();
    }
}
