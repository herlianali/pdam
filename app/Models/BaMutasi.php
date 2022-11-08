<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaMutasi extends Model
{
    use HasFactory;

    public static function getBaMutasiHistory($param)
    {
        return DB::select("SELECT NO_BAMUTASI, TGL_BAMUTASI, JNS_MUTASI, TRIM(NO_BONC) AS NO_BONC, NO_PLG, TRIM(KD_GUNAPERSIL_L) || ' / ' || TRIM(KD_GUNAPERSIL_B) as GunaPersil, TRIM(KD_TARIF_L) || ' / ' || TRIM(KD_TARIF_B) AS TARIF, TRIM(ZONA_L) || ' / ' || TRIM(ZONA_B) AS ZONA, round(UKURAN_MTR_L,2) || ' / ' || round(UKURAN_MTR_B,2) AS UKURANMTR, RP_RETRIBUSI_L || ' / ' || RP_RETRIBUSI_B as Retribusi, trim(NM_L) || ' / ' || trim(NM_B) as NAMA, TRIM(JALAN_L) || ' / ' || TRIM(JALAN_B) AS JALAN, trim(GANG_L) || ' / ' || trim(GANG_B) AS GANG, trim(NOMOR_L) || ' / ' || trim(NOMOR_B) AS NOMOR, trim(NOTAMB_L) || ' / ' || trim(NOTAMB_B) AS NOTAMB, trim(DA_L) || ' / ' || trim(DA_B) AS DA, trim(NO_PA_L) || ' / ' || trim(NO_PA_B) AS NO_PA, trim(JNS_PELANGGAN_L) || ' / ' || trim(JNS_PELANGGAN_B) as JNS_PEL, trim(KD_RETRIBUSIL) || ' / ' || trim(KD_RETRIBUSIB) as KD_RETRIBUSI, trim(NO_BUNDELL) || ' / ' || trim(NO_BUNDELB) AS NO_BUNDEL, tgl_kabag, tgl_kirimrekening, tgl_peremajaan, blnterbit, 'PERORANGAN' AS MUTASI from ba_mutasi a where tgl_batal is null and flow_ba<>'B' and TRIM(no_plg)='".$param."' UNION ALL SELECT b.no_bamutkol as NO_BAMUTASI, TGL_BAMUTASI, JNS_MUTASI, TRIM(NO_BONC) AS NO_BONC, NO_PLG, TRIM(KD_GUNAPERSIL_L) || ' / ' || TRIM(KD_GUNAPERSIL_B) as GunaPersil, TRIM(KD_TARIF_L) || ' / ' || TRIM(KD_TARIF_B) AS TARIF, TRIM(ZONA_L) || ' / ' || TRIM(ZONA_B) AS ZONA, '' AS UKURANMTR, b.RP_RETRIBUSI_L || ' / ' || b.RP_RETRIBUSI_B as Retribusi, '' as NAMA, TRIM(JALAN_LAMA) || ' / ' || TRIM(JALAN_BARU) AS JALAN, TRIM(GANG_LAMA) || ' / ' || TRIM(GANG_BARU) AS GANG, ' / ' AS NOMOR, ' / ' AS NOTAMB, ' / ' AS DA, ' / ' AS NO_PA, trim(JNS_PELANGGAN_L) || ' / ' || trim(JNS_PELANGGAN_B) as JNS_PEL, trim(KD_RETRIBUSIL) || ' / ' || trim(KD_RETRIBUSIB) as KD_RETRIBUSI, trim(NO_BUNDELL) || ' / ' || trim(NO_BUNDELB) AS NO_BUNDEL, a.tgl_kabag, a.tgl_kirimrekening, a.tgl_peremajaan, a.blnterbit, 'KOLEKTIF' AS MUTASI from ba_mutasikol a, dba_mutasikol b where a.tgl_batal is null and a.no_bamutkol=b.no_bamutkol and TRIM(b.no_plg)='".$param."'");
                    // ->whereRaw('tgl_batal is null')
                    // ->where('flow_ba', '<>', 'B')
                    // ->where(DB::raw("TRIM(no_plg)"), '=', $param)
                    // ->get();
    }
}
