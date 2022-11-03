<?php

namespace App\Http\Controllers;

use App\Models\JenisPengaduan;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class JenisPengaduanController extends Controller
{
    public function index()
    {
        $jenisPengaduans = JenisPengaduan::all();
        return view('master.jenisPengaduan.index', compact('jenisPengaduans'))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jns_pengaduan' => 'required',
            'keterangan'    => 'required',
            'sifat'         => 'required',
            'reward'        => 'required'
        ]);

        // JenisPengaduan::insert($request->except('_token'));
        JenisPengaduan::insert([
            'jns_pengaduan' => $request->jns_pengaduan,
            'keterangan'    => $request->keterangan,
            'sifat'         => $request->sifat,
            'reward'        => $request->reward
        ]);

        return redirect()->route('jenisPengaduan.index');
    }

    public function update(Request $request, $jns_pengaduan)
    {
        // $request->validate([
        //     'jns_pengaduan' => 'required',
        //     'keterangan' => 'required',
        //     'sifat' => 'required',
        //     'pelayanan' => 'required',
        //     'reward' => 'required'
        // ]);

        // JenisPengaduan::where('jns_pengaduan', $jns_pengaduan)
        //                 ->update($request->except(['_token', '_method']));

        JenisPengaduan::where(DB::raw("REPLACE(jns_pengaduan,' ','')"), $jns_pengaduan)->update([
            'jns_pengaduan' => $request->jns_pengaduan,
            'keterangan'    => $request->keterangan,
            'sifat'         => $request->sifat,
            'pelayanan'     => $request->pelayanan,
            'reward'        => $request->reward
        ]);

        return redirect()->route('jenisPengaduan.index');
    }
    public function show($jns_pengaduan)
    {
        $jenisPengaduan = JenisPengaduan::where('jns_pengaduan', $jns_pengaduan)->first();
        return response()->json($jenisPengaduan);
    }

    public function destroy($jns_pengaduan)
    {
        JenisPengaduan::where(DB::raw("REPLACE(jns_pengaduan,' ','')"), $jns_pengaduan)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Jenis Pengaduan Berhasil Dihapus',
        ]);
    }

    public function print()
    {
        $jenisPengaduans = JenisPengaduan::all();
        return view('master.jenisPengaduan.print', compact('jenisPengaduans'))->with('i');
    }
}
