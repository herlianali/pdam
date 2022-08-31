<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanggilanDinasController extends Controller
{
    public function index()
    {
        return view('master.panggilanDinas.index'); 
    }

    public function print()
    {
        return view('panggilanDinas.print');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'jp_dinas'           => 'required|max:20',
            'keterangan'         => 'required',
        ]);

        $panggilanDinas = PanggilanDinas::updateOrCreate(['id' => $request->id], [
            'jp_dinas'          => $request->jp_dinas,
            'keterangan'        => $request->keterangan,
        ]);

        return response()->json(['code'=>200, 'message'=>'Jenis Panggilan Dinas Created Successfully', 'data' =>$jenisPelanggan], 200);
    }

    public function edit(){

        return view('panggilanDinas.form');
    }

    public function show($id)
    {
        $panggilaDinas = PanggilanDinas::find($id);
        return response()->json($panggilanDinas);
    }

    public function destroy($id)
    {
        $panggilanDinas = PanggilanDinas::find($id)->delete();
        return response()->json(['success'=> 'Jenis Panggilan Dinas Berhasil Dihapus']);
    }

}
