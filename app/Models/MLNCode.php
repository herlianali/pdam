<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MLNCode extends Model
{
    use HasFactory;

    public function getMCode()
    {
        return DB::table('M_CODE')->get();
    }

    public function getLCode()
    {
        return DB::table('L_CODE')->get();
    }

    public function getNCode()
    {
        return DB::table('N_CODE')->get();
    }

    public function insertM($data)
    {
        return DB::table('M_CODE')->insert($data);
    }

    public function insertL($data)
    {
        return DB::table('L_CODE')->insert($data);
    }

    public function insertN($data)
    {
        return DB::table('N_CODE')->insert($data);
    }

    public function getByM($kode)
    {
        return DB::table('M_CODE')->where('kode', $kode)->first();
    }

    public function getByL($kode)
    {
        return DB::table('L_CODE')->where('kode', $kode)->first();
    }

    public function getByN($kode)
    {
        return DB::table('N_CODE')->where('kode', $kode)->first();
    }

    public function updateM($kode, $data)
    {
        return DB::table('M_CODE')->where('kode', $kode)->update($data);
    }

    public function updateL($kode, $data)
    {
        return DB::table('L_CODE')->where('kode', $kode)->update($data);
    }

    public function updateN($kode, $data)
    {
        return DB::table('N_CODE')->where('kode', $kode)->update($data);
    }

    public function deleteM($kode)
    {
        return DB::table('M_CODE')->where('kode', $kode)->delete();
    }

    public function deleteL($kode)
    {
        return DB::table('L_CODE')->where('kode', $kode)->delete();
    }

    public function deleteN($kode)
    {
        return DB::table('N_CODE')->where('kode', $kode)->delete();

    }
}
