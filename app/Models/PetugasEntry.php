<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasEntry extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = "PETUGAS_ENTRY";

    public static function getData()
    {
        return DB::table("PETUGAS_ENTRY")
                ->where(DB::raw('substr(kd_ptgentry,0,2)'), '=' , 'LT')
                ->orderBy('kd_ptgentry')
                ->get();
    }

}
