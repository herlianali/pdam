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
                    ->limit(900)
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

    public static function getSemua() 
    {
        return DB::table('DIP')
                    ->select('PTGKONTROL.kd_ptgktrl', 'PTGKONTROL.nip', 'DIP.nama', 'UNIT_KERJA.kd_unitkrj')
                    ->join('PTGKONTROL', 'PTGKONTROL.nip', '=', 'DIP.nip')
                    ->join('UNIT_KERJA', 'UNIT_KERJA.kd_unitkrj', '=', 'DIP.kd_unitkrj')
                    ->where('UNIT_KERJA.kd_unitkrj',['F08','F09'])
                    ->get();

    }

    public static function getTimur() 
    {
        return DB::table('DIP')
                    ->select('PTGKONTROL.kd_ptgktrl', 'PTGKONTROL.nip', 'DIP.nama', 'UNIT_KERJA.kd_unitkrj')
                    ->join('PTGKONTROL', 'PTGKONTROL.nip', '=', 'DIP.nip')
                    ->join('UNIT_KERJA', 'UNIT_KERJA.kd_unitkrj', '=', 'DIP.kd_unitkrj')
                    ->where('UNIT_KERJA.kd_unitkrj', '=', 'F08')
                    ->get();

    }
}
