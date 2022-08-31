<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelponPelangganController extends Controller
{
    public function index()
    {
        return view('master.telponPelanggan.index');
    }
}
