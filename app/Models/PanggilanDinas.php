<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanggilanDinas extends Model
{
    use HasFactory;
    protected $table = 'panggilan_dinasis';

    protected $fillable = ["no", "jp_dinas", "keterangan"];
}
