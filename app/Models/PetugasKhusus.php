<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasKhusus extends Model
{
    use HasFactory;

    protected $table = 'PET_KHUSUS';

    public function getData() {
        return DB::table($this->table)
                ->select('PET_KHUSUS.nip', 'PET_KHUSUS.tugas', 'DIP.nama', 'JENIS_PELANGGAN.keterangan')
                ->join('DIP', 'DIP.nip', '=', 'PET_KHUSUS.nip')
                ->join('JENIS_PELANGGAN', 'JENIS_PELANGGAN.JNS_PELANGGAN', '=', 'PET_KHUSUS.JENIS')
                ->get();

    }
}