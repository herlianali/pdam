<?php

namespace App\Http\Controllers;

use App\Models\JenisPelanggan;
use Illuminate\Http\Request;

class JenisPelangganController extends Controller
{
    public function index()
    {
        $jenisPelanggans = JenisPelanggan::all();

        return view('master.jenisPelanggan.index', compact('jenisPelanggans'))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_pelanggan' => 'required|max:255',
            'keterangan'      => 'required',
            'jns_rekswasta'   => 'required'
        ]);

        $jenisPelanggan = JenisPelanggan::updateOrCreate(['id' => $request->id], [
            'jenis_pelanggan' => $request->jenis_pelanggan,
            'keterangan'      => $request->keterangan,
            'jns_rekswasta'   => $request->jns_rekswasta
        ]);

        return response()->json(['code'=>200, 'message'=>'Jenis Pelanggan Created Successfully', 'data' =>$jenisPelanggan], 200);
    }

    public function show($id)
    {
        $jenisPelanggan = JenisPelanggan::find($id);

        return response()->json($jenisPelanggan);
    }

    public function destroy($id)
    {
        $jenisPelanggan = JenisPelanggan::find($id)->delete();
        return response()->json(['success'=> 'Jenis Pelanggan Berhasil Dihapus']);
    }
}
