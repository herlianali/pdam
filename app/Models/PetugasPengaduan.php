<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasPengaduan extends Model
{
    use HasFactory;

    protected $table = "PETUGAS_CS";

    public static function getData()
    {
        return DB::table("PETUGAS_CS")
                ->where(DB::raw('substr(kd_ptgcs,0,2)'), '=' , 'LT')
                ->orderBy('kd_ptgcs')
                ->get();
    }
    public static function getNameKode()
    {
        return DB::table("PETUGAS_CS")
                ->select('kd_ptgcs', 'nama')
                ->where(DB::raw('substr(kd_ptgcs,0,2)'), '=' , 'LT')
                ->orderBy('kd_ptgcs')
                ->get();
    }
    // public static function getJnsPengadu()
    // {
    //     return DB::table("PETUGAS_CS")

    // }

}
