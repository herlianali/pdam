<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tarif extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Jenis_Tarif';

    public static function getKode()
    {
        return DB::table('JENIS_TARIF')->select('kd_tarif')->distinct()->where('isactive', '=', '0')->orderBy('kd_tarif')->get();
    }
}
