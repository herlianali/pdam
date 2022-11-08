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


    public function showKorektor()
    {
        return DB::table($this->table)
        ->select('PTGKOREKTOR_NEW.nip','DIP.nama','PTGKOREKTOR_NEW.aktif','PTGKOREKTOR_NEW.jabatan','PTGKOREKTOR_NEW.recid','PTGKOREKTOR_NEW.userakses')
        ->join ('DIP', 'DIP.nip', '=', 'PTGKOREKTOR_NEW.nip')
        ->limit(900)
        ->get();
    }
}
