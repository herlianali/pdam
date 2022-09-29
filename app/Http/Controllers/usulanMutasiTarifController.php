<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanMutasiTarif;

class UsulanMutasiTarifController extends Controller
{
    public function index()
    {
        return view('mutasiPemakaian.usulanMutasiTarif.index');
    }
}
