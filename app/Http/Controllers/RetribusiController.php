<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retribusi;

class RetribusiController extends Controller
{
    public function index()
    {
        $retribus = Retribusi::all();
        return view('master.retribusi.index', compact('retribus'))->with('i');
    }

    
    public function show($id)
    {
        $retribusi = Retribusi::find($id);
        return response()->json($retribusi);
    }


    public function destroy($id)
    {
        $retribusi = Retribusi::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Retribusi Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.retribusi.print');
    }

}
