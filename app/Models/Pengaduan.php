<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengaduan extends Model
{
    use HasFactory;

    public static function getDataTable() {
        return DB::table("PENGADUAN AS a")->selectRaw("c.NO_BONC, c.TGL_BONC, c.STATUS_BON AS STATUS_BONC, d.NO_BONP, d.STATUS_BON AS STATUS_BONP, d.TGL_BONP, a.NO_PENGADUAN, a.TGL_PENGADUAN, DECODE(a.ST_PENGADUAN,'P','Sedang diproses','S','Selesai','B','Batal') AS STATUS, c.KEL_BONC, d.JNS_PEKERJAAN, a.NO_PLG, a.JNS_PENGADU, a.NAMA_PENGADU, a.ALAMAT_PENGADU, a.NAMA, a.JALAN, a.GANG, a.NOMOR, a.NOTAMB, a.URAIAN, a.JNS_PENGADUAN, a.ASAL_PENGADUAN, b.SIFAT")
                    ->join("JENIS_PENGADUAN AS b", "a.JNS_PENGADUAN", "=", "b.JNS_PENGADUAN")
                    ->join("BONC AS c", "a.NO_PENGADUAN", "=", "c.NO_PENGADUAN")
                    ->join("BONP AS d", "a.NO_PENGADUAN", "=", "d.NO_PENGADUAN")
                    ->where("a.st_pengaduan", "<>", "B")
                    ->where("a.no_plg", "=", "0000010 ")
                    ->orderBy("a.NO_PENGADUAN");
    }

    public static function getDataNative($no_plg)
    {
        return DB::select("SELECT  c.NO_BONC, c.TGL_BONC, c.STATUS_BON AS STATUS_BONC, d.NO_BONP, d.STATUS_BON AS STATUS_BONP,d.TGL_BONP,a.NO_PENGADUAN, a.TGL_PENGADUAN, DECODE(a.ST_PENGADUAN,'P','Sedang diproses','S','Selesai','B','Batal') AS STATUS,c.KEL_BONC, d.JNS_PEKERJAAN, a.NO_PLG,a.JNS_PENGADU,a.NAMA_PENGADU,a.ALAMAT_PENGADU,a.NAMA,a.JALAN, a.GANG, A.NOMOR, a.NOTAMB, a.URAIAN, a.JNS_PENGADUAN, a.ASAL_PENGADUAN, b.SIFAT FROM PENGADUAN a, JENIS_PENGADUAN b, BONC c, BONP d WHERE a.JNS_PENGADUAN = b.JNS_PENGADUAN AND a.NO_PENGADUAN = c.NO_PENGADUAN AND a.NO_PENGADUAN = d.NO_PENGADUAN AND a.st_pengaduan <> 'B' AND a.no_plg = '".$no_plg."' ORDER BY a.NO_PENGADUAN, a.TGL_PENGADUAN");
    }
    // protected $table = 'pengaduan';
}
