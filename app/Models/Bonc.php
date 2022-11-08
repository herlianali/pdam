<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bonc extends Model
{
    use HasFactory;
    protected $table = 'BONC';

    public static function getByBonc($param) {
        return DB::table('BONC')
                ->select('BONC.no_bonc', 'DIL.no_plg', 'DIL.nama', 'DIL.jalan', 'DIL.gang', 'DIL.nomor', 'DIL.notamb', 'DIL.kd_tarif', 'DIL.ukuran_mtr')
                ->join('PENGADUAN', 'BONC.NO_PENGADUAN', '=', 'PENGADUAN.NO_PENGADUAN')
                ->join('DIL', 'DIL.NO_PLG', '=', 'PENGADUAN.NO_PLG')
                ->whereRaw("BONC.no_bonc = '".$param."            '")
                ->first();
    }
}
