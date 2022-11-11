<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenetapanTeraMeter extends Model
{
    use HasFactory;

    protected $table = 'TAP_TERA';

    public function getLast() {
        return DB::table($this->table)
                ->select(DB::raw("substr(no_tera, 5) as id"))
                ->orderBy('no_tera', 'desc')->first()->{'id'};
                // ->get();
    }

    public static function getUkuran()
    {
        return DB::table("DIL")
                ->where(DB::raw('substr(ukuran_mtr, 0,2)'))
                ->orderBy('ukuran_mtr')
                ->get();
    }

    // public function getPetugas() {
    //     return DB::table($this->table)
    //             ->select('TAP_TERA.no_tera', 'PETUGAS_CS.kd_ptgcs', 'PETUGAS_CS.nama')
    //             ->where(PETUGAS_CS::raw('substr(kd_ptgentry,0,2)'), '=', 'LT')
    //             ->get();

    // }
}
