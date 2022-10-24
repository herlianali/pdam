<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasKontrol extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "PTGKONTROL";

    public function showPetugas()
    {
        return DB::table($this->table)
                    ->select('PTGKONTROL.*')
                    ->join('DIP', 'DIP.nip', '=', 'PTGKONTROL.nip')
                    ->join('UNIT_KERJA', 'UNIT_KERJA.kd_unitkrj', '=', 'DIP.kd_unitkrj')
                    ->where(DB::raw('substr(KD_PTGKTRL,1,1)'), '=' , 'T')
                    ->get();
    }



    public function getLastKode()
    {
        return DB::table($this->table)
                    ->select('PTGKONTROL.kd_ptgktrl')
                    ->join('DIP', 'DIP.nip', '=', 'PTGKONTROL.nip')
                    ->join('UNIT_KERJA', 'UNIT_KERJA.kd_unitkrj', '=', 'DIP.kd_unitkrj')
                    ->where(DB::raw('substr(KD_PTGKTRL,1,1)'), '=' , 'T')
                    ->latest('PTGKONTROL.kd_ptgktrl')
                    ->first();
    }

}
