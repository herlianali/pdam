<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MutasiKolektif extends Model
{
    use HasFactory;

    protected $table = 'BA_MUTASI';

    public function getLast() {
        return DB::table($this->table)
                ->select(DB::raw("substr(no_bamutasi, 3) as id"))
                ->orderBy('no_bamutasi', 'desc')->first()->{'id'};
    }

    public static function getByNoPlg($param) {
        return DB::table('BA_MUTASI')
                ->select('BONC.no_bonc', 'DIL.no_plg', 'DIL.nama', 'DIL.jalan', 'DIL.gang', 'DIL.nomor', 'DIL.notamb', 'DIL.kd_tarif', 'DIL.ukuran_mtr')
                ->join('PENGADUAN', 'BONC.NO_PENGADUAN', '=', 'PENGADUAN.NO_PENGADUAN')
                ->join('DIL', 'DIL.NO_PLG', '=', 'PENGADUAN.NO_PLG')
                ->whereRaw("BONC.no_bonc = '".$param."            '")
                ->first();
    }
}
