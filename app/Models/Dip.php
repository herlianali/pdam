<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dip extends Model
{
    use HasFactory;

    protected $table = "DIP";

    public static function getData()
    {
        return DB::table("DIP")
                    ->select('nip', 'nama', 'jns_pegawai', 'kddk_pegawai', 'status_pegawai')
                    ->where('jns_pegawai', '=', 'PD',  'AND', 'jns_pegawai', '=', 'PH')
                    ->where('status_pegawai', '=', 'P')
                    ->orderBy('nip')
                    ->limit(1000)
                    ->get();
    }

    public function getByNip($nip)
    {
        return DB::table($this->table)
                    ->select('nip', 'nama', 'jns_pegawai', 'kddk_pegawai', 'status_pegawai')
                    ->where('nip', $nip)
                    ->where('jns_pegawai', '=', 'PD',  'AND', 'jns_pegawai', '=', 'PH')
                    ->where('status_pegawai', '=', 'P')
                    ->first();
    }
}
