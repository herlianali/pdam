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

    public function store(Request $request)
    {
        $request->validate([
            'jns_pengaduan' => 'required',
            'keterangan'    => 'required',
            'sifat'         => 'required',
            'reward'        => 'required'
        ]);

        JenisPengaduan::insert($request->except('_token'));

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

        JenisPengaduan::where('jns_pengaduan', $jns_pengaduan)
                        ->update($request->except(['_token', '_method']));

        return redirect()->route('jenisPengaduan.index');
    }

    public function destroy($jns_pengaduan)
    {
        JenisPengaduan::where('jns_pengaduan', $jns_pengaduan)->delete();

        return redirect()->route('jenisPengaduan.index');
    }

    public function print()
    {
        $jenisPengaduans = JenisPengaduan::all();
        return view('master.jenisPengaduan.print', compact('jenisPengaduans'))->with('i');
    }
}
