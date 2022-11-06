<?php

namespace App\Http\Controllers;

use App\Models\DilM;
use Illuminate\Http\Request;

class CekSurveyTarifController extends Controller
{
    public function index()
    {
        return view('master.cekSurveyTarif.index');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'nopelanggan' => 'required|nopelanggan'
        ]);

        $request = DilM::where('nopelanggan', $request->nopelanggan)->first();
        if ($request) {
            return response()->json([
                'status' => 'success',
                'data' => $request
            ], 200);
        }
        return response()->json([
            'status' => 'failed',
            'data' => []
        ]);
        return view('master.cekSurveyTarif.index');
    }

    public function test()
    {
        $data = DilM::getDataKosong();
        dd($data);
    }

}
