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

    // public static function getNipAndNameK()
    // {
    //     return DB::table("PTGKOREKTOR_NEW")
    //                 ->selectRaw('TRIM(nama) AS nama, TRIM(userakses) AS userakses, PTGKOREKTOR_NEW.nip')
    //                 ->join('DIP', 'PTGKOREKTOR_NEW.nip', '=', 'DIP.nip')
    //                 ->where('PTGKOREKTOR_NEW.aktif', '=', 1)
    //                 ->whereRaw("jabatan in ('0', '1')")
    //                 ->get();
    // }

    // Untuk Mengambil Data Laporan Waktu Tercentang
    public static function getLaporanWaktuC($param)
    {
        return DB::select("SELECT x.thbl, x.zona, x.no_bundel, x.jml_no_plg,x.potensial, x.koreksi, Y.Tgl , Y.awal, Y.akhir, Y.menit FROM ( SELECT e.thbl, e.zona, e.no_bundel, e.jml_no_plg, NVL (e.potensial, 0) AS potensial, NVL (f.koreksi, 0) AS koreksi FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel, a.jml_no_plg, b.potensial FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, y.jml_no_plg FROM (SELECT   userakses, thbl, a.zona, no_bundel FROM ptgkorektor_new_assign a, zona_periode b Where a.Zona = b.Zona AND b.periode = '".$param['pTagih']."' AND tglassign =to_date('".$param['tgl']."','dd/mm/yyyy') AND userakses = '".$param['nip']."' AND batal = 0 ORDER BY zona, no_bundel) x, (SELECT   zona, no_bundel, COUNT (no_plg) jml_no_plg From Rekening WHERE thbl = '".$param['thbl']."' ".$param['kd_tarif']." GROUP BY zona, no_bundel) y WHERE x.zona = y.zona AND x.no_bundel = y.no_bundel) a, (SELECT   thbl, zona, no_bundel, NVL(Sum(potensial), 0) As potensial FROM (SELECT thbl, a.zona, no_bundel, jumlah potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '".$param['pTagih']."' AND thbl = '".$param['thbl']."' AND potensial = ".$param['potensial'].") GROUP BY thbl, zona, no_bundel) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+)) e, (SELECT   thbl, zona, no_bundel, NVL (COUNT (no_plg), 0) AS koreksi From Rekening WHERE thbl = '".$param['thbl']."' ".$param['kd_tarif']." GROUP BY thbl, zona, no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) and substr(e.zona,1,1) in ('0','1','2','3') ) x, ( select thbl,zona,no_bundel,potensial,tgl,to_char(k,'hh:mi:ss') as awal,to_char(b,'hh:mi:ss') as akhir,((b-k)*(24*60))as menit FROM ( select thbl,zona,no_bundel,potensial,tgl,min(waktu)as k,max(waktu)as b FROM (select thbl,zona,no_bundel,potensial,to_char(waktu,'dd/mm/yyyy')as tgl,waktu From detil_rekap_anomali where potensial = ".$param['potensial']." and waktu is not NULL order by waktu ) group by thbl,zona,no_bundel,potensial,tgl) ) y where x.thbl=y.thbl(+) and x.zona = y.zona(+) and x.no_bundel = y.no_bundel(+) order by y.awal");
    }

    // Untuk Mengambil Data Laporan Waktu Tidak Tercentang
    public static function getLaporanWaktuNc($param)
    {
        return DB::select("SELECT e.thbl, e.zona, e.no_bundel, e.jml_no_plg, nvl(e.potensial,0)as potensial, nvl(f.koreksi,0)as koreksi FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel, a.jml_no_plg, b.potensial FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, y.jml_no_plg FROM (SELECT   userakses, thbl, a.zona, no_bundel FROM ptgkorektor_new_assign a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND tglassign =to_date('".$param['tgl']."','dd/mm/yyyy') AND userakses = '19500849' AND batal = 0 AND potensial = 0 ORDER BY zona, no_bundel) x, (SELECT   zona, no_bundel, COUNT (no_plg) jml_no_plg From Rekening WHERE thbl = '201610' and trim(kd_tarif) not in ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY zona, no_bundel ORDER BY zona, no_bundel) y WHERE x.zona = y.zona AND x.no_bundel = y.no_bundel) a, (SELECT   thbl, zona, no_bundel,nvl( SUM (potensial),0) as potensial FROM (SELECT thbl, a.zona, no_bundel, jumlah potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+)) e, (SELECT   thbl, zona, no_bundel, nvl(COUNT (no_plg),0)as koreksi From Rekening WHERE thbl = '201610' AND isestimasi = 1 and trim(kd_tarif) not in ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY thbl, zona, no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) and substr(e.zona,1,1) in ('0','1','2','3')");
    }

    public static function getLapBulPerPtg()
    {
        return DB::select("SELECT e.thbl, e.tglassign, sum(e.jml_no_plg)as jml_no_plg, NVL (sum(e.potensial), 0) AS anomali, NVL (sum(f.koreksi), 0) AS koreksi FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel, a.tglassign, a.jml_no_plg, b.Potensial FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, x.tglassign, y.jml_no_plg FROM (SELECT userakses, thbl, a.zona, a.no_bundel,a.tglassign FROM ptgkorektor_new_assign a, zona_periode b Where a.Zona = b.Zona AND b.periode = 1 and a.thbl = '201610' AND userakses = '19500849' AND batal = 0 AND potensial = 0 ORDER BY zona, no_bundel ) x, (SELECT   zona, no_bundel, COUNT (no_plg) jml_no_plg From Rekening WHERE thbl = '201610' AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY zona, no_bundel ORDER BY zona, no_bundel ) y Where X.Zona = Y.Zona And X.no_bundel = Y.no_bundel ) a, (SELECT   thbl, zona, no_bundel, NVL(Sum(Potensial), 0) As Potensial FROM (SELECT thbl, a.zona, no_bundel, jumlah potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel ) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+)) e, (SELECT   thbl, zona, no_bundel, NVL (COUNT (no_plg), 0) AS koreksi From Rekening WHERE thbl = '201610' AND isestimasi = 1 AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY thbl, zona, no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) AND SUBSTR (e.zona, 1, 1) IN ('0', '1', '2', '3') group by e.thbl, e.tglassign order by e.thbl, e.tglassign");
    }

    public static function getTotalLapBulPerPtg()
    {
        return DB::select("SELECT SUM(sum(e.jml_no_plg))as tPelanggan, SUM(NVL (sum(e.potensial), 0)) AS tAnomali, SUM(NVL (sum(f.koreksi), 0)) AS tKoreksi FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel, a.tglassign, a.jml_no_plg, b.Potensial FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, x.tglassign, y.jml_no_plg FROM (SELECT userakses, thbl, a.zona, a.no_bundel,a.tglassign FROM ptgkorektor_new_assign a, zona_periode b Where a.Zona = b.Zona AND b.periode = 1 and a.thbl = '201610' AND userakses = '19500849' AND batal = 0 AND potensial = 0 ORDER BY zona, no_bundel ) x, (SELECT   zona, no_bundel, COUNT (no_plg) jml_no_plg From Rekening WHERE thbl = '201610' AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY zona, no_bundel ORDER BY zona, no_bundel ) y Where X.Zona = Y.Zona And X.no_bundel = Y.no_bundel ) a, (SELECT   thbl, zona, no_bundel, NVL(Sum(Potensial), 0) As Potensial FROM (SELECT thbl, a.zona, no_bundel, jumlah potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel ) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+)) e, (SELECT   thbl, zona, no_bundel, NVL (COUNT (no_plg), 0) AS koreksi From Rekening WHERE thbl = '201610' AND isestimasi = 1 AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY thbl, zona, no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) AND SUBSTR (e.zona, 1, 1) IN ('0', '1', '2', '3') group by e.thbl, e.tglassign order by e.thbl, e.tglassign");
    }

    public static function getLapBulAllPtg()
    {
        return DB::select("SELECT k.thbl, k.userakses, m.nama, k.jml_no_plg, k.anomali, k.koreksi FROM (SELECT e.thbl, e.userakses, SUM (e.jml_no_plg) AS jml_no_plg, NVL(SUM (e.potensial), 0) AS anomali, NVL(Sum(f.Koreksi), 0) As Koreksi FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel,  a.jml_no_plg, b.potensial FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, y.jml_no_plg FROM (SELECT userakses, thbl, a.zona, a.no_bundel, a.tglassign FROM ptgkorektor_new_assign a,zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND a.thbl = '201610' AND batal = 0 AND potensial = 0 AND SUBSTR (a.zona, 1, 1) IN ('0', '1', '2', '3') ORDER BY zona, no_bundel ) x, (SELECT a.zona, a.no_bundel, COUNT (*) jml_no_plg FROM rekening a, zona_periode b WHERE a.thbl = '201610' AND TRIM (a.kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') AND SUBSTR (a.zona, 1, 1) IN ('0', '1', '2', '3') and a.zona=b.zona and b.periode='1' GROUP BY a.zona,a.no_bundel ) y WHERE x.zona(+) = y.zona AND x.no_bundel(+) = y.no_bundel )a, (SELECT   thbl, zona, no_bundel, NVL (SUM (potensial), 0) AS potensial FROM (SELECT a.thbl, a.zona, a.no_bundel,  a.jumlah AS potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+) ) e, (SELECT   a.thbl, a.zona, a.no_bundel,  NVL (COUNT (a.no_plg), 0) AS koreksi FROM rekening a, zona_periode b WHERE a.thbl = '201610' AND a.isestimasi = 1 AND TRIM (a.kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') and a.zona = b.zona AND b.periode = '1' AND SUBSTR (a.zona, 1, 1) IN ('0', '1', '2', '3') GROUP BY a.thbl, a.zona, a.no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) GROUP BY e.thbl, e.userakses ORDER BY e.thbl, e.userakses)k, ptgkorektor_new l, dip m WHERE k.userakses = l.userakses (+) AND l.nip = m.nip(+)");
    }

    public static function getTotalLapBulAllPtg()
    {
        return DB::select("SELECT sum(k.jml_no_plg)as tPelanggan, sum(k.anomali) AS tAnomali, sum(k.koreksi) AS tKoreksi FROM (SELECT e.thbl, e.userakses, SUM (e.jml_no_plg) AS jml_no_plg, NVL(SUM (e.potensial), 0) AS anomali, NVL(Sum(f.Koreksi), 0) As Koreksi FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel,  a.jml_no_plg, b.potensial FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, y.jml_no_plg FROM (SELECT userakses, thbl, a.zona, a.no_bundel, a.tglassign FROM ptgkorektor_new_assign a,zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND a.thbl = '201610' AND batal = 0 AND potensial = 0 AND SUBSTR (a.zona, 1, 1) IN ('0', '1', '2', '3') ORDER BY zona, no_bundel ) x, (SELECT a.zona, a.no_bundel, COUNT (*) jml_no_plg FROM rekening a, zona_periode b WHERE a.thbl = '201610' AND TRIM (a.kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') AND SUBSTR (a.zona, 1, 1) IN ('0', '1', '2', '3') and a.zona=b.zona and b.periode='1' GROUP BY a.zona,a.no_bundel ) y WHERE x.zona(+) = y.zona AND x.no_bundel(+) = y.no_bundel )a, (SELECT   thbl, zona, no_bundel, NVL (SUM (potensial), 0) AS potensial FROM (SELECT a.thbl, a.zona, a.no_bundel,  a.jumlah AS potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+) ) e, (SELECT   a.thbl, a.zona, a.no_bundel,  NVL (COUNT (a.no_plg), 0) AS koreksi FROM rekening a, zona_periode b WHERE a.thbl = '201610' AND a.isestimasi = 1 AND TRIM (a.kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') and a.zona = b.zona AND b.periode = '1' AND SUBSTR (a.zona, 1, 1) IN ('0', '1', '2', '3') GROUP BY a.thbl, a.zona, a.no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) GROUP BY e.thbl, e.userakses ORDER BY e.thbl, e.userakses)k, ptgkorektor_new l, dip m WHERE k.userakses = l.userakses (+) AND l.nip = m.nip(+)");
    }

    public static function getLaporanHonorium()
    {
        return DB::select("SELECT f.*,trim(h.nama)||'  -  '|| trim(g.nip)as Petugas, i.jml_koreksiperhari, i.rp_satuan FROM (SELECT e.userakses, e.thbl, e.tglassign, SUM (e.jml_no_plg) AS jml_no_plg, NVL (SUM (e.potensial), 0) AS anomali, NVL(Sum(F.Koreksi), 0) As Koreksi, e.jns_pot FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel, a.tglassign, a.jml_no_plg , b.Potensial, a.jns_pot FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, x.tglassign, y.jml_no_plg, x.jns_pot FROM (SELECT userakses, thbl, a.zona, a.no_bundel, a.tglassign, potensial as jns_pot FROM ptgkorektor_new_assign a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND a.thbl = '201610' AND batal = 0 AND potensial = 0 ORDER BY zona, no_bundel) x, (SELECT zona, no_bundel, COUNT (no_plg) jml_no_plg From Rekening WHERE thbl = '201610' AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY zona, no_bundel ORDER BY zona, no_bundel) y WHERE x.zona = y.zona AND x.no_bundel = y.no_bundel) a, (SELECT thbl, zona, no_bundel, NVL(Sum(Potensial), 0) As Potensial FROM (SELECT thbl, a.zona, no_bundel, jumlah potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+)) e, (SELECT thbl, zona, no_bundel, NVL (COUNT (no_plg), 0) AS koreksi From Rekening WHERE thbl = '201610' AND isestimasi = 1 AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY thbl, zona, no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) GROUP BY e.thbl, e.tglassign, e.userakses, e.jns_pot ORDER BY e.thbl, e.userakses, e.tglassign ) f, ptgkorektor_new g, dip h, sk_ptgkorektor i Where F.userakses = G.userakses and g.nip=h.nip and i.is_aktif='1'");
    }

    public static function getTotalLaporanHonorium()
    {
        return DB::select("SELECT f.jml_no_plg, f.anomali ,trim(h.nama)||'  -  '|| trim(g.nip)as Petugas, i.jml_koreksiperhari, i.rp_satuan FROM (SELECT e.userakses, e.thbl, e.tglassign, SUM (e.jml_no_plg) AS jml_no_plg, NVL (SUM (e.potensial), 0) AS anomali, NVL(Sum(F.Koreksi), 0) As Koreksi, e.jns_pot FROM (SELECT a.userakses, a.thbl, a.zona, a.no_bundel, a.tglassign, a.jml_no_plg , b.Potensial, a.jns_pot FROM (SELECT x.userakses, x.thbl, x.zona, x.no_bundel, x.tglassign, y.jml_no_plg, x.jns_pot FROM (SELECT userakses, thbl, a.zona, a.no_bundel, a.tglassign, potensial as jns_pot FROM ptgkorektor_new_assign a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND a.thbl = '201610' AND batal = 0 AND potensial = 0 ORDER BY zona, no_bundel) x, (SELECT zona, no_bundel, COUNT (no_plg) jml_no_plg From Rekening WHERE thbl = '201610' AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY zona, no_bundel ORDER BY zona, no_bundel) y WHERE x.zona = y.zona AND x.no_bundel = y.no_bundel) a, (SELECT thbl, zona, no_bundel, NVL(Sum(Potensial), 0) As Potensial FROM (SELECT thbl, a.zona, no_bundel, jumlah potensial FROM rekap_anomali a, zona_periode b Where a.Zona = b.Zona AND b.periode = '1' AND thbl = '201610' AND potensial = 0) GROUP BY thbl, zona, no_bundel) b WHERE a.thbl = b.thbl(+) AND a.zona = b.zona(+) AND a.no_bundel = b.no_bundel(+)) e, (SELECT thbl, zona, no_bundel, NVL (COUNT (no_plg), 0) AS koreksi From Rekening WHERE thbl = '201610' AND isestimasi = 1 AND TRIM (kd_tarif) NOT IN ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h') GROUP BY thbl, zona, no_bundel) f WHERE e.thbl = f.thbl(+) AND e.zona = f.zona(+) AND e.no_bundel = f.no_bundel(+) GROUP BY e.thbl, e.tglassign, e.userakses, e.jns_pot ORDER BY e.thbl, e.userakses, e.tglassign ) f, ptgkorektor_new g, dip h, sk_ptgkorektor i Where F.userakses = G.userakses and g.nip=h.nip and i.is_aktif='1'");
    }

    public static function getMonitoringBlmPenugasan($param)
    {
        return DB::select("SELECT no_plg,prevpAkai,currpakai FROM(SELECT a.no_plg AS no_plg,b.no_plg AS no_plgrekapanomali,prevpAkai,currpakai FROM( SELECT no_plg,prevpAkai,currpakai FROM(SELECT no_plg,prevpAkai,currpakai,ROUND(((currpakai-prevpakai)/prevpakai)*100,2) AS prosentase FROM( SELECT no_plg, DECODE(SUM(prevpakai),0,1,SUM(prevpakai)) prevpakai,DECODE(SUM(currpakai),0,1,SUM(currpakai)) currpakai FROM( SELECT no_plg,(CASE WHEN (pakaiawal IS NULL) THEN pakai ELSE pakaiawal END)AS currpakai,0 AS prevpakai From Rekening WHERE thbl='".$param['periode']."' AND ZONA='".$param['zona']."' AND no_bundel='".$param['no_bundel']."' Union All SELECT no_plg,0 AS currpakai,pakai AS prevpakai From Rekening WHERE thbl='" .$param['periodeprev']. "' AND ZONA='".$param['zona']."' AND no_bundel='".$param['no_bundel']."' ) GROUP BY no_plg ORDER BY no_plg ) ) Where prosentase >= 30 Or prosentase <= -30 Or currpakai = 1 Or currpakai < 1 )a,(SELECT no_plg From DETIL_REKAP_ANOMALI WHERE thbl='".$param['periode']."' AND ZONA='".$param['zona']."' AND no_bundel='".$param['no_bundel']."' ORDER BY no_plg)b WHERE a.no_plg=b.no_plg(+) ) Where no_plgrekapanomali Is Null ORDER BY no_plg");
    }

    public static function getMonitoring($param)
    {
        return DB::select("SELECT distinct c.thbl, c.zona, c.no_bundel, d.tgl_catat, c.tgl_upload, c.tgl_random, c.tglassign, c.userakses, c.potensial, e.nama from(select distinct thbl, zona, no_bundel, userakses, potensial, tgl_upload, tgl_random, tglassign from(select distinct a.zona, a.thbl, a.no_bundel, a.potensial, a.tgl_upload, a.tgl_random, trim(b.userakses) as userakses, b.tglassign from rekap_anomali a, ptgkorektor_new_assign b where a.zona=b.zona(+) and a.no_bundel=b.no_bundel (+) and a.thbl=b.thbl (+) and a.potensial=b.potensial (+))) c,rekening d, (select trim(replace(replace(nip,'.',''),'T ','')) as nipbaru, nama from dip) e where c.zona=d.zona (+) and c.no_bundel=d.no_bundel (+) and c.thbl=d.thbl (+) and c.thbl='" .$param['periode']. "' and c.userakses=e.nipbaru (+) ".$param['zona'].$param['chkMonitoring']." order by c.zona, c.no_bundel");
    }
}
