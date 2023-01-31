<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MonitoringBAMutasiKolektif extends Model
{
    use HasFactory;
    protected $table = 'ba_mutasikol';

    public static function getBA($no_bamutkol)
    {
        return DB::select("SELECT * from ba_mutasikol where no_bamutkol='".$no_bamutkol."'");
    }

}
