<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Static_;

class GunaPersil extends Model
{
    use HasFactory;

    protected $table = "GUNA_PERSIL";
    protected $fillable = ["kd_gunapersil", "keterangan", "kd_gunapersil_i", "kd_tarif"];
    public $timestamps = false;

    // public function joinGunaPersil()
    // {
    //     return DB::table($this->table)
    //                 ->join()
    // }

    public function getData() {
        return DB::table($this->table)
                ->select('GUNA_PERSIL.kd_gunapersil_i', 'GUNA_PERSIL.keterangan')
                ->join('JENIS_TARIF', 'JENIS_TARIF.kd_tarif', '=', 'GUNA_PERSIL.kd_tarif')
                ->get();
    }

    public Static function filter($start, $end) {
        return DB::table('GUNA_PERSIL')
                    ->select("kd_gunapersil", "keterangan", "kd_gunapersil_i", "kd_tarif")
                    ->whereBetween("kd_gunapersil", [$start, $end])
                    ->orderBy("kd_gunapersil", "asc")
                    ->get();
    }
}
