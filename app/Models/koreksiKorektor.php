<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class koreksiKorektor extends Model
{
    use HasFactory;
    protected $table = "PTGKOREKTOR_NEW_ASSIGN";

    public function showKoreksi()
    {
        return DB::table($this->table)
        ->select('PTGKOREKTOR_NEW.nip','DIP.nama','PTGKOREKTOR_NEW_ASSIGN.recid','PTGKOREKTOR_NEW_ASSIGN.zona','PTGKOREKTOR_NEW_ASSIGN.no_bundel')
        ->join ('PTGKOREKTOR_NEW', 'PTGKOREKTOR_NEW.USERAKSES', '=','PTGKOREKTOR_NEW_ASSIGN.USERAKSES')
        ->join ('DIP','DIP.nip','=', 'PTGKOREKTOR_NEW.nip')
        ->limit(900)
        ->get();
    }



}
