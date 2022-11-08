<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class LaporanTarifPerBendel extends Model
{
    use HasFactory;
    protected $table = "DIL";

    public function show()
    {
        return DB::table($this->table)
        ->select('DIL.no_plg','DIL.nama','DIL.jalan','DIL.gang','DIL.nomor','DIL.no_tambahan', 'DIL.kd_tarif', 'RETRIBUSI.rp_retribusi')
        ->join ('DIL', 'DIL.kd_retribusi', '=','RETRIBUSI.kd_retribusi')
        ->get();
    }


}
