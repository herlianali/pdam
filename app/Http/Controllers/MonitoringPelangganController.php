<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringPelanggan;

class MonitoringPelangganController extends Controller
{
    public function index()
    {
        // $mPelanggan = new MonitoringPelanggan;
        // $monPelanggan = $mPelanggan->getData();
        return view('master.monitoringPelanggan.index')->with('i');
    }

    public function show($no_plg)
    {
        $monPelanggan = MonitoringPelanggan::where('no_plg', $no_plg)->first();
        return response()->json($monPelanggan);
    }


    public function filter(Request $request)
    {

        if($request->cname == true && $request->cekAlamat == false) {
            $data = "cekName True";
        }
        if($request->cekAlamat == true && $request->cname == false) {
            $data = "cekAlamat True";
        }

        return response()->json($data);
        // $result = [];

        // if ($request->cekNama == true) {
        //     if (!is_null($request->nama)) {
        //         $data = MonitoringPelanggan::where('nama', 'LIKE', "%{$request->nama}%")
        //             ->get()
        //             ->except('created_at', 'updated_at');
        //             $result =array_push($result, $data);
        //     }
        // } else if ($request->cekAlamat == true) {
        //     if (!is_null($request->jalan)) {
        //         $data = MonitoringPelanggan::where('jalan', 'LIKE', "%{$request->jalan}%")
        //             ->get()
        //             ->except('created_at', 'updated_at');
        //             $result =array_push($result, $data);
        //     } else if (!is_null($request->gang)) {
        //         $data = MonitoringPelanggan::where('gang', 'LIKE', "%{$request->gang}%")
        //             ->get()
        //             ->except('created_at', 'updated_at');
        //         array_push($result, $data);
        //     } else if (!is_null($request->nomor)) {
        //         $data = MonitoringPelanggan::where('nomor', 'LIKE', "%{$request->nomor}%")
        //             ->get()
        //             ->except('created_at', 'updated_at');
        //             $result =array_push($result, $data);
        //     } else {
        //         $data = MonitoringPelanggan::where('no_tambahan', 'LIKE', "%{$request->no_tambahan}%")
        //             ->get()
        //             ->except('created_at', 'updated_at');
        //             $result =array_push($result, $data);
        //     }
        // } else {
        //     return $this->index();
        // }

        // $monPelanggan = array_shift($result);
        // return view('master.monitoringPelanggan.index', compact(['monPelanggan','filter']))->with('i');
    }
}
