<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KondisiTutupan;

class KondisiTutupanController extends Controller
{
    public function index()
    {
        $kondTutupan = KondisiTutupan::all();
        return view('master.kondisiTutupan.index', compact('kondTutupan'))->with('i');
    }

    
    public function show($id)
    {
        $kondisiTutupan = KondisiTutupan::find($id);
        return response()->json($kondisiTutupan);
    }


    public function destroy($id)
    {
        $kondisiTutupan = KondisiTutupan::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Kondisi Tutupan Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.kondisiTutupan.print');
    }

}