<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Retribusi extends Model
{
    use HasFactory;

    protected $table = "RETRIBUSI";

    public $timestamps = false;

    public function AIncrement()
    {
        return DB::table($this->table)
                    ->select('kd_retribusi')
                    ->latest('kd_retribusi')
                    ->first()->{'kd_retribusi'};
    }

    

}
