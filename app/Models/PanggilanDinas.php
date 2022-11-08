<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PanggilanDinas extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'JENIS_PANGGILANDINAS';

    
    
    public static function filter ($start, $end){
        return DB::table('JENIS_PANGGILANDINAS')
                    ->select("jns_pdinas","keterangan")
                    ->whereBetween("jns_pdinas", [$start, $end])
                    ->orderBy("jns_pdinas","asc")
                    ->get();
    }
}


