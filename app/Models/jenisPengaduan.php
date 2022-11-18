<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JenisPengaduan extends Model
{
    use HasFactory;

    protected $table = 'JENIS_PENGADUAN';
    // protected $fillable = ['jns_pengaduan', 'keterangan', 'sifat', 'reward'];
    public $timestamps = false;

    public static function filter ($start, $end){
        return DB::table('JENIS_PENGADUAN')
                    ->select("jns_pengaduan","keterangan","sifat","reward")
                    ->whereBetween("jns_pengaduan", [$start, $end])
                    ->orderBy("jns_pengaduan","asc")
                    ->get();
    }
}
