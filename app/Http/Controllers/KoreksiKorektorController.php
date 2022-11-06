<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use App\Models\koreksiKorektor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KoreksiKorektorController extends Controller
{

    public function index()
    {
        $cS    = Dip::getData();
        $Koreksi = new koreksiKorektor();
        $koreksi = $Koreksi->showKoreksi();
        return view('master.petugasKorektor.koreksi', compact('cS', 'koreksi'))->with('i');
    }

    public function update(Request $request, $recid)
    {

    koreksiKorektor::where('recid', $recid)->update([
        'nip' => $request->nip,
        'nama'    => $request->nama,
        'recid'    => $request->recid,
        'zona'     => $request->zona,
        'bundel'      => $request->bundel
    ]);
}

    public function destroy($recid)
    {
        koreksiKorektor::where('recid', $recid)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Dihapus',
        ]);
    }

}
