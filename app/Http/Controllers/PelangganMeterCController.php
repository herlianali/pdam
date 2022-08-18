<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganMeterCController extends Controller
{
    public function index()
    {
        return view('master.pelangganmeterc.index');
    }
}
