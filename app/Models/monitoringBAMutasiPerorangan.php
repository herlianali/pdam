<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MonitoringBAMutasiPerorangan extends Model
{
    use HasFactory;
    protected $table = 'ba_mutasi';

    public static function getData($no_bamutasi)
    {
        return DB::select("SELECT * from ba_mutasi where no_bamutasi='".$no_bamutasi."'");
    }

    public static function filter ($no_bamutasi) {
        return DB::table('BA_MUTASI')
                ->select("no_bamutasi","tgl_bamutasi","jns_mutasi","no_plg","nm_l","nm_b","jalan_l","gang_l","nomor_l","notamb_l","jalan_b","gang_b","nomor_b","notamb_b","kd_tarif_l","kd_tarif_b")
                ->where('no_bamutasi', '=', $no_bamutasi)
                ->orderByRaw("no_bamutasi,tgl_bamutasi,jns_mutasi,no_plg,nm_l,nm_b,jalan_l,gang_l,nomor_l,notamb_l,jalan_b,gang_b,nomor_b,notamb_b,kd_tarif_l,kd_tarif_b")
                ->limit(400)
                ->get();
    }


}
