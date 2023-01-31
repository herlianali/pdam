<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasCS extends Model
{
    use HasFactory;

    protected $table = 'PETUGAS_CS';

    public static function getData()
    {
        return DB::table("PETUGAS_CS")
                ->where(DB::raw('substr(kd_ptgcs,0,2)'), '=' , 'LT')
                ->where('PETUGAS_CS.aktif', '=', 1)
                ->orderBy('kd_ptgcs')
                ->get();
    }

    public static function getPetugas()
    {
        return DB::select("SELECT trim(kd_ptgcs)||' - '||trim(nama) as ptg_cs from petugas_cs where substr(kd_ptgcs,0,2)=' ' and aktif=1 order by kd_ptgcs");
    }
}