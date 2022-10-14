<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPengaduan extends Model
{
    use HasFactory;

    protected $table = 'JENIS_PENGADUAN';
    protected $fillable = ['jns_pengaduan', 'keterangan', 'sifat', 'reward'];
    public $timestamps = false;
}
