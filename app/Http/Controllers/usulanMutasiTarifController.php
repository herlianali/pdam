<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usulanMutasiTarif;

class usulanMutasiTarifController extends Controller
{
    public function index()
    {
        return view('mutasiPemakaian.usulanMutasiTarif.index');
    }
}
