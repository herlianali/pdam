<?php

namespace App\Http\Controllers;

use App\Models\BaMutasi;
use Illuminate\Http\Request;
use App\Models\CetakBAPerorangan;
use App\Models\DilM;

class CetakBAPeroranganController extends Controller
{
    public function index()
    {
        return view('BAMutasiPelanggan.cetakBAPerorangan.index');
    }

    public function preview(Request $request)
    {
        $getByNoBA = DilM::getFilter($request->no_bamutasi);
        $filter = $request->filter;
        $alamat = trim($getByNoBA->jalan_l, ' ') . ' no. ' . trim($getByNoBA->gang_l) . ' ' . trim($getByNoBA->nomor_l) . ' ' . trim($getByNoBA->notamb_l);
        $query = CetakBAPerorangan::filter($request->start, $request->end);
        $formFilter = array(
            'no_bamutasi'   => $getByNoBA->no_bamutasi,
            'tgl_bamutasi'  => $getByNoBA->tgl_bamutasi,
            'no_plg'        => $getByNoBA->no_plg,
            'nm_l'          => $getByNoBA->nm_l,
            'alamat'        => $alamat,
            'kd_tarif_b'    => $getByNoBA->kd_tarif_b,
            'kd_tarif_l'    => $getByNoBA->kd_tarif_l,
            'query'         => $query,
            'start'         => $request->start,
            'end'           => $request->end,
        );
        $tableFilter = BaMutasi::getFilter($request->no_bamutasi);
        $data = array(
            'formFilter'  => $formFilter,
            'tableFilter' => $tableFilter,
        );
        return view('BAMutasiPelanggan.cetakBAPerorangan.preview', compact('data'))->with('i');
    }
}
