<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MonitoringPelanggan extends Model
{
    use HasFactory;

    protected $table = "DIL";
    public function getData()
    {
        return DB::table('DIL')
                    ->select('no_plg', 'nama', 'jalan', 'gang', 'nomor', 'notamb', 'kd_tarif')
                    ->get();
    }
}
