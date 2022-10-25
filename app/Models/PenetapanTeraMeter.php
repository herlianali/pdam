<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenetapanTeraMeter extends Model
{
    use HasFactory;

    protected $table = 'TAP_TERA';

    public function getLast() {
        return DB::table($this->table)
                ->select(DB::raw("substr(no_tera, 5) as id"))
                ->orderBy('no_tera', 'desc')->first()->{'id'};
    }
}
