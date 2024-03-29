<?php

namespace App\Http\Controllers;

use App\Models\AsalPengaduan;
use App\Models\DilM;
use App\Models\JenisPengaduan;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\PetugasPengaduan;

class PengaduanController extends Controller
{

    public function index($table = null)
    {
        $ptgcs = PetugasPengaduan::getNameKode();
        $aslPengaduan = AsalPengaduan::all();
        $jnsPengaduan = JenisPengaduan::select('jns_pengaduan', 'keterangan')->get();
        $table;
        return view('pengaduan.pengaduan.pengaduan', compact('ptgcs', 'table', 'aslPengaduan', 'jnsPengaduan'));
    }

    public function cariPelanggan(Request $request)
    {
        if ($request->no_pelanggan_c) {
            // $data = DilM::getByNoPlg($request->no_pelanggan);
            $data = Pengaduan::getDataNative($request->no_pelanggan);

        }elseif ($request->no_pa_c) {
            $data = "no_pa_c benar";
        }elseif ($request->nama_c) {
            $data = "nama_c benar";
        }elseif ($request->alamat_c) {
            $data = "alamat_c benar";
        }
        return response()->json($data);
    }

    public function detail()
    {
        return view('pengaduan.pengaduan.detail');
    }

    public function edit()
    {
        return view('pengaduan.pengaduan.edit');
    }

    public function printbonc()
    {
        return view('pengaduan.pengaduan.printbonc');
    }


    public function printbonp()
    {
        return view('pengaduan.pengaduan.printbonp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
