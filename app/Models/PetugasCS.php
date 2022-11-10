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
                ->orderBy('kd_ptgcs')
                ->get();
    }
}