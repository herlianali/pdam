<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenetapanTeraMeter extends Model
{
    use HasFactory;

    protected $table = 'TAP_TERA';

    public function getLast() {
        return DB::table($this->table)
                ->select(DB::raw("substr(no_tera, 5) as id"))
                ->orderBy('no_tera', 'desc')->first()->{'id'};
                // ->get();
    }

    public static function getUkuran()
    {
        return DB::table("DIL")
                ->where(DB::raw('substr(ukuran_mtr, 0,2)'))
                ->orderBy('ukuran_mtr')
                ->get();
    }

    public static function getCetak($no_tera)
    {
        return DB::select("SELECT a.no_tera, a.tgl_tera, a.no_bonc, a.uk_meter, a.biaya_tera, a.total_biaya, d.no_plg, d.nama, d.jalan, d.gang, d.nomor, d.notamb, d.kd_tarif , d.jns_persil, d.no_pa, a.nama_pengadu, a.alamat_pengadu, a.telp_pengadu from tap_tera a, bonc b, pengaduan c, dil d Where a.no_bonc = b.no_bonc and b.no_pengaduan=c.no_pengaduan and c.no_plg=d.no_plg and a.no_tera = '" .$no_tera. "'");
    }

    public static function getPetugas($kd_ptgcs)
    {
        return DB::select("SELECT nama,nip from petugas_cs where substr(kd_ptgcs,0,4)='" .$kd_ptgcs. "' and aktif=1 order by kd_ptgcs");
    }
}
