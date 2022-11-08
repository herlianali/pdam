<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DilM;

class HistoriMutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('BAMutasiPelanggan.historiMutasi.index');
    }
     
        public function show($no_plg)
        {
            $getByPlg = DilM::getByPlg($no_plg);
        return response()->json($getByPlg);
        }
}
