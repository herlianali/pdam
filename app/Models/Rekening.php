<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Log;

class Rekening extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "REKENING";

    public static function getData($periode, $no_bundel, $zona, $jns_pelanggan)
    {
        return DB::table("REKENING")
                    ->select('no_plg', 'nama', 'jalan', 'gang', 'nomor', 'notamb', 'no_pa', 'kd_tarif')
                    ->whereRaw("THBL = '$periode'")
                    ->whereRaw("NO_BUNDEL = '$no_bundel'")
                    ->whereRaw("ZONA = '$zona'")
                    ->whereRaw("JNS_PELANGGAN = '$jns_pelanggan'")
                    ->orderByRaw('JNS_PELANGGAN, NO_BUNDEL, JALAN, GANG, GENAP, TO_NUMBER(NOMOR), NOTAMB, NO_PLG')
                    ->first();
    }


    public static function filter ($thbl, $param) {
        return DB::table('REKENING')
                ->select("no_plg","nama","jalan","gang","nomor","notamb","da","kd_tarif","kd_verifikator")
                ->join('ZONA_PERIODE','REKENING.Zona', '=', 'ZONA_PERIODE.Zona')
                ->where('thbl', '=', $thbl)
                ->where('ZONA_PERIODE.periode', '=' , $param['periode'])
                ->where('tipe_verifikator', '=' , $param['stan_persil'])
                ->orderByRaw("no_plg, nama, jalan, gang, nomor, notamb, da, kd_tarif")
                ->limit(400)
                ->get();
    }

}
