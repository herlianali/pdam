<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DilM extends Model
{
    use HasFactory;

    protected $table = "DIL";

    public static function getByPlg($param) {
        return DB::table('DIL')
                ->select('no_plg','nama','jalan','gang','nomor','notamb','kd_tarif','jns_pelanggan','zona')
                ->whereRaw("TRIM(no_plg) = '".$param."'")
                ->first();
    }

    public static function getByNama($param)
    {
        return DB::table("DIL")->select('no_plg', DB::raw("REPLACE('ukuran_mtr', '.', ',')"))->where(DB::raw("TRIM(nama)"), 'LIKE', $param)->orderByDesc('no_plg')->first();
    }

    public static function getByNoPa($param)
    {
        return DB::table("DIL")->select('no_plg')->where(DB::raw("TRIM(nama)"), 'LIKE', $param)->orderByDesc('no_plg')->first();
    }

    public static function getByAlamat($jalan, $gang, $nomor, $notamb)
    {
        DB::table("DIL")->select('no_plg')->where(DB::raw("TRIM(jalan)"), 'LIKE', $jalan)->orderByDesc('no_plg')->first()->{'no_plg'};

    }

    public static function getDataKosong()
    {
        return DB::table("DIL")
                    ->select('DIL.zona', 'DIL.no_bundel', 'DIL.no_plg', 'b.listrik', 'b.jalan')
                    ->join("(SELECT 'no_plg', 'listrik', 'jalan' FROM 'SURVEY_TARIF' WHERE trim(listrik) = '0' OR trim(jalan) = '0') as b", 'DIL.no_plg', '=', 'b.no_plg')
                    ->orderBy('DIL.zona', 'asc')
                    ->first();
    }

    // for tarif Bundel
    public static function getDataTarifBundel()
    {
        return DB::table("DIL")
                ->select('DIL.no_plg','DIL.nama','DIL.jalan','DIL.gang','DIL.nomor','DIL.notamb', 'DIL.zona', 'DIL.no_bundel', 'DIL.kd_tarif', 'RETRIBUSI.rp_retribusi')
                ->join ('RETRIBUSI', 'DIL.kd_retribusi', '=','RETRIBUSI.kd_retribusi');
    }

    // public static function getFilter()
    // {
    //     return DB::table("DIL")
    //             ->select('dil.NAMA','dil.JALAN','dil.GANG','dil.NOMOR','dil.NOTAMB','wilayah_dist.KD_WILAYAH','wilayah_dist.NAMA as NAMA_WILAYAH','ba_mutasi.*','bonc.tgl_bonc','bonc.tgl_realisasi','dil.da','ba_mutasi.da_b','merk_meter.merk AS merkl','tmerk.merk AS merkb','ZONA_PERIODE.PERIODE')
    //             ->first();

    // }

}
