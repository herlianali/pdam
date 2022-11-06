<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JenisPekerjaan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'JENIS_PEKERJAAN';

    public static function filter ($start, $end){
        return DB::table('JENIS_PEKERJAAN')
                    ->select("jns_pekerjaan","keterangan","jenis_bonp","beban_plg","kel_bonp")
                    ->whereBetween("jns_pekerjaan", [$start, $end])
                    ->orderBy("jns_pekerjaan","asc")
                    ->get();
    }
}
