<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MonitoringPelanggan extends Model
{
    use HasFactory;

    protected $table = "DIL";
    public static function getPelanggan($no_plg)
    {
        return DB::table('DIL')
                    ->select('no_plg', 'nama', 'jalan', 'gang', 'nomor', 'notamb', 'kd_tarif')
                    ->join('ZONA', 'ZONA.zona', '=', 'DIL.zona')
                    ->whereRaw("TRIM(no_plg) = '".$no_plg."'")
                    ->first();
    }

    public static function getData($param)
    {
    return DB::select("select a.no_plg,a.nama,a.jalan,a.gang,a.nomor,a.notamb,a.kd_tarif from dil a,zona b where a.zona=b.zona and b.kd_wilayah='".$param['wilayah']."' ".$param['query']." AND status LIKE '".$param['status']."' order by no_plg");
    }

    // public static function getPelanggan($no_plg)
    // {
    //     return DB::table('DIL')
    //                 ->select('no_plg',a.nama,a.jalan,a.gang,a.nomor,a.notamb,a.kd_tarif)
    // }
}
