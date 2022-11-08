<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JenisPelanggan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'JENIS_PELANGGAN';
  
    // public static function filter ($start, $end){
    //     return DB::table('JENIS_PELANGGAN')
    //                 ->select("jns_pelanggan","keterangan","jns_rekswasta")
    //                 ->whereBetween("jns_pelanggan", ['SS3     ', 'SS2     '])
    //                 ->orderBy("jns_pelanggan","asc")
    //                 ->get();
    // }


}
