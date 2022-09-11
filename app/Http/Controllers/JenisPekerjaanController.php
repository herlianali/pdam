<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPekerjaan;

class JenisPekerjaanController extends Controller
{
    public function index()
    {
        $jnsPekerjaan = JenisPekerjaan::all();
        return view('master.jenisPekerjaan.index', compact('jnsPekerjaan'))->with('i');
    }

    
    public function show($id)
    {
        $jenisPekerjaan = JenisPekerjaan::find($id);
        return response()->json($jenisPekerjaan);
    }


    public function destroy($id)
    {
        $jenisPekerjaan = JenisPekerjaan::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Jenis Pekerjaan Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.jenisPekerjaan.print');
    }

}
