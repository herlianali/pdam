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

    
    public function show($id)
    {
        $materai = Materai::find($id);
        return response()->json($materai);
    }


    public function destroy($id)
    {
        $materai = Materai::findOrFail($id)->delete();
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
