<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiPelunasanRekening;
use App\Models\DilM;
use Carbon\Carbon;

class InformasiPelunasanRekeningController extends Controller
{
    public function index()
    {
        $data = [];
        return view('pengaduan.informasiPelunasanRekening.index', compact('data'))->with('i');
    }

    public function show(Request $request)
    {
        // $awal = explode("/",$request->periode);
        // $akhir = explode("/",$request->periode1);
        // $pAwal  = $awal[1].$awal[0];
        // $pAkhir = $akhir[1].$akhir[0];
        $getByPlg = DilM::getByPlg($request->no_plg);
        $alamat = trim($getByPlg->jalan, ' ') . ' no. ' . trim($getByPlg->gang) . ' ' . trim($getByPlg->nomor) . ' ' . trim($getByPlg->notamb);
        $formHistory = array(
            'periode'       => $request->periode,
            'periode1'      => $request->periode1,
            'no_plg'        => $request->no_plg,
            'nama'          => $getByPlg->nama,
            'alamat'        => $alamat
        );

        $tableHistory = InformasiPelunasanRekening::getInfo($request->periode, $request->periode1, $request->no_plg);
        $tablePlg = InformasiPelunasanRekening::getNoPlg($request->no_plg);

        $data = array(
            'formHistory'   => $formHistory,
            'tableHistory'  => $tableHistory,
            'tablePlg'      => $tablePlg
        );
        //dd($formHistory);
        return view('pengaduan.informasiPelunasanRekening.index', compact('data'))->with('i');
    }
    
    public function print(Request $request)
    {
        $awal = explode("/",$request->periode);
        $akhir = explode("/",$request->periode1);
        $bulan = $awal[1];
        $monthName = date('F', mktime(0, 0, 0, $bulan));
        $bulan1 = $akhir[1];
        $monthName1 = date('F', mktime(0, 0, 0, $bulan1));
        $date = Carbon::now()->format('d-M-Y H:i:s');
        $getByPlg = DilM::getByPlg($request->no_plg);
        $alamat = trim($getByPlg->jalan, ' ') . ' no. ' . trim($getByPlg->gang) . ' ' . trim($getByPlg->nomor) . ' ' . trim($getByPlg->notamb);
        $formHistory = array(
            'periode'       => $request->periode,
            'periode1'      => $request->periode1,
            'no_plg'        => $request->no_plg,
            'nama'          => $getByPlg->nama,
            'alamat'        => $alamat
        );

        $tableHistory = InformasiPelunasanRekening::getInfo($request->periode, $request->periode1, $request->no_plg);
        $tablePlg = InformasiPelunasanRekening::getNoPlg($request->no_plg);

        $data = array(
            'monthName'     => $monthName,
            'monthName1'     => $monthName1,
            'formHistory'   => $formHistory,
            'tableHistory'  => $tableHistory,
            'tablePlg'      => $tablePlg
        );
        //dd($data);
        return view('pengaduan.informasiPelunasanRekening.print', compact('data', 'awal', 'akhir', 'date'))->with('i');
    }

    public function cetak(Request $request)
    {
        $awal = explode("/",$request->periode);
        $akhir = explode("/",$request->periode1);
        $bulan = $awal[1];
        $monthName = date('F', mktime(0, 0, 0, $bulan));
        $bulan1 = $akhir[1];
        $monthName1 = date('F', mktime(0, 0, 0, $bulan1));
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $getByPlg = DilM::getByPlg($request->no_plg);
        $alamat = trim($getByPlg->jalan, ' ') . ' no. ' . trim($getByPlg->gang) . ' ' . trim($getByPlg->nomor) . ' ' . trim($getByPlg->notamb);
        $formHistory = array(
            'periode'       => $request->periode,
            'periode1'      => $request->periode1,
            'no_plg'        => $request->no_plg,
            'nama'          => $getByPlg->nama,
            'alamat'        => $alamat
        );

        $tableHistory = InformasiPelunasanRekening::getInfo($request->periode, $request->periode1, $request->no_plg);
        $tablePlg = InformasiPelunasanRekening::getNoPlg($request->no_plg);

        $data = array(
            'monthName'     => $monthName,
            'monthName1'     => $monthName1,
            'formHistory'   => $formHistory,
            'tableHistory'  => $tableHistory,
            'tablePlg'      => $tablePlg
        );
        return view('pengaduan.informasiPelunasanRekening.cetak', compact('data', 'awal', 'akhir', 'date'))->with('i');
    }
}
