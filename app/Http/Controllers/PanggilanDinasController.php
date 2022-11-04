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
            'jns_pdinas' => 'required',
            'keterangan' => 'required',
        ]);

        PanggilanDinas::insert([
            'jns_pdinas' => $request->jns_pdinas,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('panggilanDinas.index');
    }


    public function show($jns_pdinas)
    {
        $pDinas = PanggilanDinas::where('jns_pdinas', $jns_pdinas)->first();
        return response()->json($pDinas);
    }

    public function update(Request $request, $jns_pdinas)
    {
        PanggilanDinas::where('jns_pdinas', $jns_pdinas)
                    ->update([
                        'jns_pdinas' => $request->jns_pdinas,
                        'keterangan' => $request->keterangan
                    ]);

        return redirect()->route('panggilanDinas.index');
    }

    public function destroy($jns_pdinas)
    {
        PanggilanDinas::where('jns_pdinas', $jns_pdinas)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Jenis Panggilan Dinas Berhasil Dihapus',
        ]);
    }

    // public function settingPrint(){
        
        
    //     $pDinass = PanggilanDinas::all();
    //     return view('master.panggilanDinas.index', compact('pDinass'))->with('i');
    //     // return view('master.panggilanDinas.setting-print');
    // }

    
    public function printPreview(Request $request){
        if($request->filter == "semua"){
            $filter = PanggilanDinas::all();
        }else {
        
        
        $filter = PanggilanDinas::filter($request->start, $request->end);
    }
        // dd($filter);
         return view('master.panggilanDinas.print', compact('filter'));
    }

    // public function print()
    // {


    //     $pDinas = PanggilanDinas::all()->except(['created_at', 'updated_at']);

    //     $pdf = PDF::loadview('master.panggilanDinas.print', compact('pDinas'));
    //     return $pdf->download('jenis-panggilan-dinas.pdf');
    // }
}
