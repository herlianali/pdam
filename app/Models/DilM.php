<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DilM extends Model
{
    use HasFactory;

    protected $table = "DIL";

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
        return DB::table('DIL');
    }
}
