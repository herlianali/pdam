<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KondisiTutupan;
use \Illuminate\Support\Facades\DB;

class KondisiTutupanController extends Controller
{
    public function index()
    {
        $kondTutupan = KondisiTutupan::all();
        return view('master.kondisiTutupan.index', compact('kondTutupan'))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_kondisi'    => 'required|max:255',
            'keterangan'    => 'required'
        ]);

        KondisiTutupan::insert([
            'kd_kondisi'    => $request->kd_kondisi,
            'keterangan'    => $request->keterangan
        ]);

        return redirect()->route('kondisiTutupan.index');
    }

    public function update(Request $request, $kd_kondisi)
    {
        
        KondisiTutupan::where(DB::raw("REPLACE(kd_kondisi,' ','')"), $kd_kondisi)
        // KondisiTutupan::where('kd_kondisi', $kd_kondisi)
                ->update([
                    'kd_kondisi'    => $request->kd_kondisi,
                    'keterangan'    => $request->keterangan
                ]);


        return redirect()->route('kondisiTutupan.index');
    }

    public function show($kd_kondisi)
    {
        $kondisiTutupan = KondisiTutupan::where('kd_kondisi', $kd_kondisi)->first();
        return response()->json($kondisiTutupan);
    }

    public function destroy($kd_kondisi)
    {
        KondisiTutupan::where(DB::raw("REPLACE(kd_kondisi,' ','')"), $kd_kondisi)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Kondisi Tutupan Berhasil Dihapus',
        ]);
    }
  
    public function print()
    {
        $kondTutupan = KondisiTutupan::all();
        return view('master.kondisiTutupan.print', compact('kondTutupan'))->with('i');
    }

    // public function printPreview(Request $request){
    //     if($request->filter == "semua"){
    //         $filter = KondisiTutupan::all();
    //     }else {
        
        
    //     $filter = KondisiTutupan::filter($request->start, $request->end);
    // }
    //     // dd($filter);
    //      return view('master.kondisiTutupan.print', compact('filter'));
    // }

}
