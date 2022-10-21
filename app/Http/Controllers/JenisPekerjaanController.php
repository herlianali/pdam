<?php

namespace App\Http\Controllers;

use App\Models\JenisBonp;
use Illuminate\Http\Request;
use App\Models\JenisPekerjaan;

class JenisPekerjaanController extends Controller
{
    public function index()
    {
        $jnsPekerjaan = JenisPekerjaan::all();
        $jnsBonp      = JenisBonp::all();
        return view('master.jenisPekerjaan.index', compact(['jnsPekerjaan', 'jnsBonp']))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jns_pekerjaan' => 'required',
            'keterangan'    => 'required',
            'jenis_bonp'    => 'required',
            'beban_plg'     => 'required',
            'kel_bonp'      => 'required'
        ]);

        // dd($request->post());
        JenisPekerjaan::insert([
            'jns_pekerjaan' => $request->jns_pekerjaan,
            'keterangan'    => $request->keterangan,
            'jenis_bonp'    => $request->jenis_bonp,
            'beban_plg'     => $request->beban_plg,
            'kel_bonp'      => $request->kel_bonp
        ]);

        return redirect()->route('jenisPekerjaan.index');
    }

    public function update(Request $request, $jns_pekerjaan)
    {
        // $request->validate([
        //     'jns_pekerjaan' => 'required',
        //     'keterangan'    => 'required',
        //     'jenis_bonp'    => 'required',
        //     'beban_plg'     => 'required',
        //     'kel_bonp'      => 'required'
        // ]);

        // dd($request->post());
        JenisPekerjaan::where('jns_pekerjaan', $jns_pekerjaan)->update([
            'jns_pekerjaan' => $request->jns_pekerjaan,
            'keterangan'    => $request->keterangan,
            'jenis_bonp'    => $request->jenis_bonp,
            'beban_plg'     => $request->beban_plg,
            'kel_bonp'      => $request->kel_bonp
        ]);

        return redirect()->route('jenisPekerjaan.index');
    }


    public function show($jns_pekerjaan)
    {
        $jenisPekerjaan = JenisPekerjaan::where('jns_pekerjaan', $jns_pekerjaan)->first();
        return response()->json($jenisPekerjaan);
    }


    public function destroy($jns_pekerjaan)
    {
        JenisPekerjaan::where('jns_pekerjaan', $jns_pekerjaan)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Jenis Pekerjaan Berhasil Dihapus',
        ]);
    }

    public function print()
    {
        $jnsPekerjaan = JenisPekerjaan::all();
        return view('master.jenisPekerjaan.print', compact('jnsPekerjaan'))->with('i');
    }

}
