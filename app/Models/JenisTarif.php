<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JenisTarif extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'JENIS_TARIF';

    public static function getKdTarif()
    {
        return DB::select("SELECT distinct substr(kd_tarif,1,2) as kd_tarif from JENIS_TARIF where substr(kd_tarif,1,2) not in('52','99') and isactive='0' order by substr(kd_tarif,1,2) ");
    }
    
}
