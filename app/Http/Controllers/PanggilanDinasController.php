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
    
    public function print(Request $request){
        $filter = $request->filter;
        if($filter == "semuakd"){
            $query = PanggilanDinas::all();
        }else {
            $query = PanggilanDinas::filter($request->start, $request->end);
        }
        $data = array(
            'filter' => $request->filter,
            'query'  => $query,
            'start'  => $request->start,
            'end'    => $request->end,
        );
        return view('master.panggilanDinas.print', compact('data', 'filter'))->with('i');
    }

    public function cetak(Request $request)
    {
        if($request->filter == "semuakd"){
            $filter = PanggilanDinas::all();
        }else {
            $filter = PanggilanDinas::filter($request->start, $request->end);
        }
        return view('master.panggilanDinas.cetak', compact('filter'))->with('i');
    }
}
