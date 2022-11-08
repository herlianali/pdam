<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsertPosisiMeter extends Model
{
    use HasFactory;

    protected $table = "INSERT_POSISI_METER";
    protected $fillable = ["no", "no_plg", "posisi_meter"];
}
