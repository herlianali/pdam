<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasKorektor extends Model
{
    use HasFactory;
    protected $table = 'PTGKOREKTOR_NEW';
    public $timestamps = false;

    public static function getByRecid($recid){
        return DB::table("PTGKOREKTOR_NEW")
                ->select('PTGKOREKTOR_NEW.nip','DIP.nama','PTGKOREKTOR_NEW.aktif','PTGKOREKTOR_NEW.jabatan','PTGKOREKTOR_NEW.recid','PTGKOREKTOR_NEW.userakses')
                ->join('DIP', 'DIP.nip', '=', 'PTGKOREKTOR_NEW.nip')
                ->where('recid', '=', $recid)
                ->limit(900)
                ->first();
    }

    public function getLast() {
        return DB::table($this->table)
                ->select("recid")
                ->orderBy('recid', 'desc')->first()->{'recid'};
                // ->get();
    }

    public function showKorektor()
    {
        return DB::table($this->table)
        ->select('PTGKOREKTOR_NEW.nip','DIP.nama','PTGKOREKTOR_NEW.aktif','PTGKOREKTOR_NEW.jabatan','PTGKOREKTOR_NEW.recid','PTGKOREKTOR_NEW.userakses')
        ->join ('DIP', 'DIP.nip', '=', 'PTGKOREKTOR_NEW.nip')
        ->limit(900)
        ->get();
    }

    // untuk dropdown petugas korektor / laporan
    public static function getNipAndName()
    {
        return DB::table("PTGKOREKTOR_NEW")
                    ->selectRaw('TRIM(nama) AS nama, TRIM(userakses) AS userakses, PTGKOREKTOR_NEW.nip')
                    ->join('DIP', 'PTGKOREKTOR_NEW.nip', '=', 'DIP.nip')
                    ->where('PTGKOREKTOR_NEW.aktif', '=', 1)
                    ->get();
    }

    // Untuk Mengambil Data Laporan Waktu Tercentang
    public static function getLaporanWaktuNc($param)
    {
        return DB::select("SELECT e.thbl, e.zona, e.no_bundel, e.jml_no_plg, nvl(e.potensial,0)as potensial, nvl(f.koreksi,0)as koreksi FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel, a.jml_no_plg, b.potensial FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, y.jml_no_plg FROM (SELECT   userakses, thbl, a.zona, no_bundel FROM ptgkorektor_new_assign a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND tglassign =to_date('".$param['tgl']."','dd/mm/yyyy') AND userakses = '19500849' AND batal = 0 AND potensial = 0 ORDER BY zona, no_bundel) x, (SELECT   zona, no_bundel, COUNT (no_plg) jml_no_plg From Rekening WHERE thbl = '201610' and trim(kd_tarif) not in ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY zona, no_bundel ORDER BY zona, no_bundel) y WHERE x.zona = y.zona AND x.no_bundel = y.no_bundel) a, (SELECT   thbl, zona, no_bundel,nvl( SUM (potensial),0) as potensial FROM (SELECT thbl, a.zona, no_bundel, jumlah potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+)) e, (SELECT   thbl, zona, no_bundel, nvl(COUNT (no_plg),0)as koreksi From Rekening WHERE thbl = '201610' AND isestimasi = 1 and trim(kd_tarif) not in ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY thbl, zona, no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) and substr(e.zona,1,1) in ('0','1','2','3')");
    }
}
