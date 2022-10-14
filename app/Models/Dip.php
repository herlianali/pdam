<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dip extends Model
{
    use HasFactory;

    protected $table = "DIP";

    public function cariPegawai($nama, $nip)
    {
        $cari = DB::table($this->table)
                    ->select('nip', 'nama', 'kddk_pegawai', 'jns_pegawai', 'status_pegawai')
                    ->where('nama', $nama)
                    ->orWhere('nip', $nip)
                    ->get();
        return $cari;
    }
}
