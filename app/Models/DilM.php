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

    // public static function getByNoPlg($no_plg)
    // {
    //     return DB::select("SELECT a.no_plg,a.zona,a.jns_pelanggan,a.no_bundel,a.nama,trim(a.jalan) || ' ' || decode(trim(a.gang),'','' || decode(trim(a.nomor),'','',trim(a.nomor)) || decode(trim(a.notamb),'','', trim(a.notamb)),  trim(a.gang) || '/' || decode(trim(a.nomor),'','',trim(a.nomor)) || decode(trim(a.notamb),'','',trim(a.notamb))) as alamat_pemohon from dil a where a.no_plg= '" .$no_plg. "' ORDER BY a.NO_PLG DESC FETCH FIRST 1 ROWS ONLY");
    // }

    public static function getNoPlg($param){
        return DB::table('DIL')
                ->select('DIL.no_plg', 'DIL.zona', 'DIL.jns_pelanggan', 'DIL.no_bundel', 'DIL.nama', 'DIL.jalan', 'DIL.gang', 'DIL.nomor', 'DIL.notamb', 'DIL.rp_retribusi')
                ->whereRaw("DIL.no_plg = '".$param."            '")
                ->first();
    }

    public static function getPln($no_bundel, $zona)
    {
        return DB::table("DIL")
                    ->select('zona', 'no_bundel', 'no_plg', 'listrik', 'jalan', 'jns_pelanggan', 'gang', 'nomor', 'notamb', 'genap')
                    ->whereRaw("ZONA = '$zona'")
                    ->whereRaw("NO_BUNDEL = '$no_bundel'")
                    ->orderByRaw('no_bundel, jalan, gang, genap, to_number(nomor), notamb, no_plg')
                    ->first();
    }

    public static function getJalanPln($zona, $no_bundel)
    {
        return DB::select("SELECT a.ZONA, a.no_bundel, a.no_plg, b.listrik, b.jalan, a.jns_pelanggan,a.jalan jalanku, a.gang, a.nomor, a.notamb, a.genap FROM DIL a,( SELECT no_plg, listrik, jalan FROM SURVEY_TARIF WHERE listrik='0' OR jalan='0') b Where a.no_plg = b.no_plg and a.zona='".$zona."' and a.no_bundel='".$no_bundel."' ORDER BY a.no_bundel, a.jalan, a.gang, a.genap, to_number(a.nomor), a.notamb, a.no_plg FETCH FIRST 1 ROWS ONLY");
    }

    public static function getBundel($param)
    {
        return DB::select("SELECT Distinct no_bundel from dil where zona='".$param."'");
    }

    public static function getPelanggan($no_plg)
    {
        return DB::select("SELECT a.no_plg,a.nama,a.jalan,a.gang,a.nomor,a.notamb,a.kd_tarif from dil a,zona b where a.zona=b.zona and a.no_plg='".$no_plg."'");
    }

    public static function getInfo($no_plg)
    {
        return DB::select("SELECT * from dil where no_plg='".$no_plg."'");
    }
}