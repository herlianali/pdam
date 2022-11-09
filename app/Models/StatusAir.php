<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class StatusAir extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "statusair";

    
    // public static function filter ($start, $end){
    //     return DB::table('STATUSAIR')
    //                 ->select("kd_statusair","keterangan")
    //                 ->whereBetween("kd_statusair", [$start, $end])
    //                 ->orderBy("kd_statusair","asc")
    //                 ->get();
    // }

}
