<?php

namespace App\Http\Controllers;

use App\Models\Materai;
use Illuminate\Http\Request;

class MateraiController extends Controller
{
    public function index()
    {
        $matrai = Materai::all();
        return view('master.materai.index', compact('matrai'))->with('i');
    }

    public function store(Request $request)
    {
        Materai::insert([
            'nominal'    => $request->nominal,
            'rp_materai' => $request->rp_materai
        ]);

        return redirect()->route('materai.index');
    }

    public function show($nominal)
    {
        $materai = Materai::where('nominal', $nominal)->first();
        return response()->json($materai);
    }

    public function update(Request $request, $nominal)
    {
        Materai::where('nominal', $nominal)
                    ->update([
                        'nominal'    => $request->nominal,
                        'rp_materai' => $request->rp_materai
                    ]);

        return redirect()->route('materai.index');
    }

    public function destroy($nominal)
    {
        Materai::where('nominal', $nominal)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Materai Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.materai.print');
    }

}
