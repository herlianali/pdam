<?php

namespace App\Http\Controllers;

use App\Models\JenisPengaduan;
use Illuminate\Http\Request;

class JenisPengaduanController extends Controller
{
    public function index()
    {
        $jenisPengaduans = JenisPengaduan::all();
        return view('master.jenisPengaduan.index', compact('jenisPengaduans'))->with('i');
    }

    public function destroy($id)
    {
        $jenisPengaduan = JenisPengaduan::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Jenis Pengaduan Berhasil Dihapus',
        ]);
    }

    public function print()
    {
        return view('master.jenisPengaduan.print');
    }
}
