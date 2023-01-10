<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use App\Models\koreksiKorektor;
use Illuminate\Http\Request;
use App\Models\PetugasKorektor;
use App\Models\RandomPetugas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\DB;

class PetugasKorektorController extends Controller
{
    public function index()
    {
        $cS = Dip::getData();
        $pKorektor = new PetugasKorektor();
        $korektor = $pKorektor->showKorektor();
        return view('master.petugasKorektor.index', compact('cS', 'korektor'))->with('i');
    }

    public function store(Request $request)
    {
        $getLast = new PetugasKorektor;
        $no = (int)$getLast->getLast()+1;
        $aktif = isset($request->aktif) ? 1 : 0;
        PetugasKorektor::insert([
            'nip'           => $request->nip,
            'jabatan'       => $request->jabatan,
            'userakses'     => Session::get('username'),
            'aktif'         => $aktif,
            'recid'         => $no
        ]);

        return redirect()->route('petugasKorektor.index');
    }

    public function update(Request $request, $recid)
    {
        $aktif = isset($request->aktif) ? 1 : 0;
        PetugasKorektor::where(DB::raw("REPLACE(recid,' ','')"), $recid)->update([
            'nip'       => $request->nipE,
            'jabatan'   => $request->jabatanE,
            'userakses' => Session::get('username'),
            'aktif'     => $aktif
        ]);

        return redirect()->route('petugasKorektor.index');
    }


    public function show($recid)
    {
        $petKorektor = PetugasKorektor::getByRecid($recid);
        return response()->json($petKorektor);
    }


    public function destroy($recid)
    {

        $pKorektor = PetugasKorektor::where('recid', $recid)->delete();
        return response()->json($pKorektor);
    }

    public function laporan()
    {
        $date = Carbon::now()->format('Y-m-d');
        $nip  = PetugasKorektor::getNipAndName();
        return view('master.petugasKorektor.laporan', compact('date', 'nip'))->with('i');
    }

    public function showLaporan(Request $request)
    {
        $namaNip = explode('|',$request->nip);
        $i       = 1;
        $dateNow = Carbon::now()->format('d-M-Y');
        $tgl     = date("d-m-Y", strtotime($request->date));
        $nip     = $namaNip[0];
        $nama    = $namaNip[1];

        if($request->potensial == "on"){
            if($request->pKhusus == "on"){
                $potensial = 2;
                $kd_tarif  = "and trim(kd_tarif) not in ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h')";
            }else{
                $potensial = 1;
                $kd_tarif  = "AND TRIM (kd_tarif) IN ('3B.1', '3B.2', '3C.1', '4C', '4D', '4B.1', '5', '53a','53b', '53c', '53f', '53g', '53h')";
            }
        }else{
            $potensial = 0;
            $kd_tarif  = "and trim(kd_tarif) not in ('3B.1','3B.2','3C.1','4C','4D','4B.1','5','53a','53b','53c','53f','53g','53h')";
        }

        $data = [
            'tgl'       => $tgl,
            'thbl'      => $request->thbl,
            'nip'       => $nip,
            'namaPtg'   => $nama,
            'pTagih'    => $request->periode_tagih,
            'potensial' => $potensial,
            'kd_tarif'  => $kd_tarif,
            'waktu'     => $request->waktu,
        ];

        if ($request->submit == "tampil") {
            if($request->waktu == "on"){
                $tampil = PetugasKorektor::getLaporanWaktuC($data);
                return view('master.petugasKorektor.cetak.tampillaporanwaktu', compact('dateNow','tampil', 'i'));
            }else{
                $tampil = PetugasKorektor::getLaporanWaktuNc($data);
                return view('master.petugasKorektor.cetak.tampillaporan', compact('dateNow','tampil','i'));
            }
        }elseif ($request->submit == "cetak"){

            if ($request->pilih == "lb_per_pertugas") {

                $tampil = PetugasKorektor::getLapBulPerPtg();
                $total  = PetugasKorektor::getTotalLapBulPerPtg()[0];

                return view('master.petugasKorektor.cetak.laporanbulananperpetugas', compact('dateNow','tampil', 'i', 'data', 'total'));

            }elseif ($request->pilih == "lb_semua_petugas"){

                $tampil = PetugasKorektor::getLapBulAllPtg();
                $total = PetugasKorektor::getTotalLapBulAllPtg()[0];

                return view('master.petugasKorektor.cetak.laporanbulanansemuapetugas', compact('dateNow','tampil', 'i', 'data', 'total'));

            }elseif ($request->pilih == "nonDireksi"){

                $tampil = PetugasKorektor::getLaporanHonorium();
                $total = PetugasKorektor::getTotalLaporanHonorium();

                return view('master.petugasKorektor.cetak.laporanbulanansemuapetugas', compact('dateNow','tampil', 'i', 'data', 'total'));

            }elseif ($request->pilih == "direksi"){

                $tampil = PetugasKorektor::getLaporanHonorium();
                $total = PetugasKorektor::getTotalLaporanHonorium();

                return view('master.petugasKorektor.cetak.laporanbulanansemuapetugas', compact('dateNow','tampil', 'i', 'data', 'total'));

            }else{
                return "no selected option";
            }
        }

    }

    public function tampillaporan($tampil)
    {
        $date = Carbon::now()->format('d-M-Y');
        dd($tampil);
        return view('master.petugasKorektor.cetak.tampillaporan', compact('date','tampil'))->with('i');
    }

    public function laporanperpetugas()
    {
        $date = Carbon::now()->format('d-M-Y');
        return view('master.petugasKorektor.cetak.laporanbulananperpetugas', compact('date'))->with('i');
    }

    public function laporansemuapetugas()
    {
        $date = Carbon::now()->format('d-M-Y');
        return view('master.petugasKorektor.cetak.laporanbulanansemuapetugas', compact('date'))->with('i');
    }

    public function laporanhonorium()
    {
        return view('master.petugasKorektor.cetak.laporanhonorium');
    }
    public function laporanhonoriumdireksi()
    {
        return view('master.petugasKorektor.cetak.laporanhonoriumdireksi');
    }


    public function viewsisa()
    {
        return view('master.petugasKorektor.viewsisa');
    }

    public function random()
    {
        $date   = Carbon::now()->format('Y-m-d');
        $random = PetugasKorektor::getNipAndName();
        return view('master.petugasKorektor.random', compact('date','random'))->with('i');
    }

    public function koreksi()
    {
        $cS    = Dip::getData();
        $Koreksi = new koreksiKorektor();
        $koreksi = $Koreksi->showKoreksi();
        return view('master.petugasKorektor.koreksi', compact('cS', 'koreksi'))->with('i');
    }

    public function updatekoreksi(Request $request, $recid)
    {
        dd($request->post());
        PetugasKorektor::where(DB::raw("REPLACE(recid,' ','')"), $recid)
                    ->update([
                        'nip' => $request->nip1,
                        'nama' => $request->nama1,
                        'recid' => $request->recid1,
                        'zona' => $request->zona1,
                        'no_bundel' => $request->no_bundel1
                    ]);

        //return redirect()->route('master.petugasKorektor.form');
    }

    public function viewpts()
    {
        $date   = Carbon::now()->format('Y-m-d');
        return view('master.petugasKorektor.viewpts', compact('date'))->with('i');
    }

    public function monitoring()
    {
        $data = [];
        $tView = [];
        $tampil = [];
        return view('master.petugasKorektor.monitoring', compact('data', 'tView', 'tampil'));
    }

    public function showMonitoring(Request $request)
    {
        $periodeAwal = explode('/',$request->periode);
        $currthn = $periodeAwal[0];
        $currbln = $periodeAwal[1] - 1;
        if ((string)$currbln == "00") {
            $currbln = "12";
            $currthn = $currthn - 1;
            $periodeprev = $currthn.$currbln;
        }else{
            $currbln = $currbln - 1;
            if ($currbln < 10) {
                $currbln = "0".$currbln;
                $periodeprev = $currthn.$currbln;
            }else{
                $periodeprev = $currthn.$currbln;
            }
        }

        if ($request->chkPenugasan) {
            $tView = "1";
            $data = [
                'periodeprev' => $periodeprev,
                'periode'     => $periodeAwal[0].$periodeAwal[1],
                'zona'        => $request->zona,
                'no_bundel'   => $request->no_bundel,
            ];

            $tampil = PetugasKorektor::getMonitoringBlmPenugasan($data);
            return view('master.petugasKorektor.monitoring', compact('tampil', 'tView'));
        }else{
            $tView = "2";
            $zona = "";
            $chkMonitoring = implode(' ',$request->chkMonitoring);

            if ($request->zona <> null) {
                $zona = "and c.zona = '$request->zona'";
            }

            $data = [
                'periode'       => $periodeAwal[0].$periodeAwal[1],
                'zona'          => $zona,
                'chkMonitoring' => $chkMonitoring,
            ];

            $tampil = PetugasKorektor::getMonitoring($data);
            return view('master.petugasKorektor.monitoring', compact('tampil', 'tView'));
        }


    }
}
