<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanggilanDinas extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'JENIS_PANGGILANDINAS';
}
