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

    public function store(Request $request)
    {
        // dd($request->post());
        // $request->validate([

        // ])
        KondisiTutupan::insert($request->except('_token'));

        return redirect()->route('kondisiTutupan.index');
    }

    public function update(Request $request, $kd_kondisi)
    {

    }

    public function show($kd_kondisi)
    {
        $kondisiTutupan = KondisiTutupan::find($kd_kondisi);
        return response()->json($kondisiTutupan);
    }


    public function destroy($kd_kondisi)
    {
        KondisiTutupan::where('kd_kondisi', $kd_kondisi)->delete();

        return redirect()->route('kondisiTutupan.index');
    }
    public function print()
    {
        return view('master.kondisiTutupan.print');
    }

}
