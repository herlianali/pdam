<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasEntry;

class PetugasEntryController extends Controller
{
    public function index()
    {
        $pEntry = PetugasEntry::all();
        return view('master.petugasEntry.index', compact('pEntry'))->with('i');
    }

    public function store(Request $request)
    {
        // dd($request->post());

        PetugasEntry::insert([
            'kd_ptgentry' => $request->kd_ptgentry,
            'nip'         => $request->nip,
            'nama'        => $request->nama,
            'aktif'       => "Y"
        ]);

        return redirect()->route('petugasEntry.index');
    }

    public function show($id)
    {
        $ptsEntry = PetugasEntry::find($id);
        return response()->json($ptsEntry);
    }


    public function destroy($kd_ptgentry)
    {
        PetugasEntry::findOrFail($kd_ptgentry)->delete();
        return redirect()->route('petugasEntry');
    }
    public function print()
    {
        return view('master.petugasEntry.print');
    }

}
