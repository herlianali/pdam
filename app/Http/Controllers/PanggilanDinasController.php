<?php

namespace App\Http\Controllers;

use App\Models\PanggilanDinas;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class PanggilanDinasController extends Controller
{
    public function index()
    {
        $pDinass = PanggilanDinas::all();
        return view('master.panggilanDinas.index', compact('pDinass'))->with('i');
    }
  

    public function store(Request $request)
    {
        $request->validate([
            
            'jp_dinas'           => 'required',
            'keterangan'         => 'required|max:255',
        ]);

        $pDinas = PanggilanDinas::UpdateOrCreate(['id' => $request->id], [
            'jp_dinas'           => $request->jp_dinas,
            'keterangan'         => $request->keterangan,
        ]);

        return response()->json(['code'=>255, 'message'=>'Jenis Panggilan Dinas Created Successfully', 'data' =>$pDinas], 50);
    }

   
    public function show($id)
    {
        $pDinas = PanggilanDinas::find($id);
        return response()->json($pDinas);
    }

   

    public function destroy($id)
    {
        PanggilanDinas::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Jenis Panggilan Dinas Berhasil Dihapus',
        ]);
    }

    public function settingPrint(){
        return view('master.panggilanDinas.setting-print');
    }

    public function print()
    {
        $pDinas = PanggilanDinas::all()->except(['created_at', 'updated_at']);

        $pdf = PDF::loadview('master.panggilanDinas.print', compact('pDinas'));
        return $pdf->download('jenis-panggilan-dinas.pdf');
    }
}
