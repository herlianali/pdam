<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KondisiTutupan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "KONDISI_TUTUPAN";

    
    // public static function filter ($start, $end){
    //     return DB::table('KONDISI_TUTUPAN')
    //                 ->select("kd_kondisi","keterangan")
    //                 ->whereBetween("kd_kondisi", [$start, $end])
    //                 ->orderBy("kd_kondisi","asc")
    //                 ->get();
    // }
}
