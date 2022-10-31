<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasKorektor extends Model
{
    use HasFactory;
    protected $table = 'PTGKOREKTOR_NEW';
    public $timestamps = false;


    public function showKorektor()
    {
        // $korektor = DB::table($this->table)
        //                 ->select('')
    }
}
