<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GunaPersil extends Model
{
    use HasFactory;

    protected $table = "GUNA_PERSIL";

    // public function joinGunaPersil()
    // {
    //     return DB::table($this->table)
    //                 ->join()
    // }
}
