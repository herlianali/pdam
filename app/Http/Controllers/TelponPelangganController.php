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
                                        ->first();
        return response()->json($telpPelanggan);
    }

    // public function update(Request $request, $no_plg)
    // {
       
    //     TelponPelanggan::where('no_plg', $no_plg)->update([
    //         'no_plg' => $request->no_plg,
    //         'nama'    => $request->nama,
    //         'alamat'    => $request->alamat,
    //         'telp_1'     => $request->telp_1
    //     ]);

    //     return redirect()->route('telponPelanggan.index');
    // }


}
