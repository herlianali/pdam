<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasKorektor extends Model
{
    use HasFactory;
    protected $table = 'PTGKOREKTOR_NEW';
    public $timestamps = false;

    public static function getByRecid($recid){
        return DB::table("PTGKOREKTOR_NEW")
                ->select('PTGKOREKTOR_NEW.nip','DIP.nama','PTGKOREKTOR_NEW.aktif','PTGKOREKTOR_NEW.jabatan','PTGKOREKTOR_NEW.recid','PTGKOREKTOR_NEW.userakses')
                ->join('DIP', 'DIP.nip', '=', 'PTGKOREKTOR_NEW.nip')
                ->where('recid', '=', $recid)
                ->first();
    }

    public function getLast() {
        return DB::table($this->table)
                ->select("recid")
                ->orderBy('recid', 'desc')->first()->{'recid'};
                // ->get();
    }

    public function showKorektor()
    {
        return DB::table($this->table)
        ->select('PTGKOREKTOR_NEW.nip','DIP.nama','PTGKOREKTOR_NEW.aktif','PTGKOREKTOR_NEW.jabatan','PTGKOREKTOR_NEW.recid','PTGKOREKTOR_NEW.userakses')
        ->join ('DIP', 'DIP.nip', '=', 'PTGKOREKTOR_NEW.nip')
        ->limit(900)
        ->get();
    }

    // untuk dropdown petugas korektor / laporan
    public static function getNipAndName()
    {
        return DB::table("PTGKOREKTOR_NEW")
                    ->selectRaw('TRIM(nama) AS nama, TRIM(userakses) AS userakses, PTGKOREKTOR_NEW.nip')
                    ->join('DIP', 'PTGKOREKTOR_NEW.nip', '=', 'DIP.nip')
                    ->where('PTGKOREKTOR_NEW.aktif', '=', 1)
                    ->get();
    }
}
