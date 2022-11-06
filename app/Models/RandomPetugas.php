<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RandomPetugas extends Model
{
    use HasFactory;
    protected $table = 'PTGKOREKTOR_NEW_ASSIGN';
    public $timestamps = false;

}
