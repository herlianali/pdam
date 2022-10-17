<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelponPelanggan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'info_data_pelanggan';
}
