<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GunaPersil;

class GunaPersilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gnPersil = GunaPersil::all();
        return view('master.gunaPersil.index', compact('gnPersil'))->with('i');
    }

 
      
    public function show($id)
    {
        $gunaPersil = GunaPersil::find($id);
        return response()->json($gunaPersil);
    }



    public function destroy($id)
    {
        $gunaPersil = GunaPersil::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Guna Persil Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.gunaPersil.print');
    }
}
