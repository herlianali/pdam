<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TelponPelanggan;

class TelponPelangganController extends Controller
{
    public function index()
    {
        return view('master.telponPelanggan.index');
    }

    public function show($no_plg)
    {
        $telpPelanggan = TelponPelanggan::select('nama', 'telp_1', 'alamat')
                                        ->where('no_plg', $no_plg)
                                        ->where('aktif', 1)
                                        ->get()->first();
        return response()->json($telpPelanggan);
    }
}
