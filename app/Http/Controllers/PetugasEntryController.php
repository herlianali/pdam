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

    
    public function show($id)
    {
        $ptsEntry = PetugasEntry::find($id);
        return response()->json($ptsEntry);
    }


    public function destroy($id)
    {
        $ptsEntry = PetugasEntry::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Petugas Entry Berhasil Dihapus',
        ]);
    }
    public function print()
    {
        return view('master.petugasEntry.print');
    }

}
