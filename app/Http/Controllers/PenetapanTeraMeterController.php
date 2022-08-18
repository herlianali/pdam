<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenetapanTeraMeterController extends Controller
{
    public function index()
    {
        return view('master.penetapanTeraMeter.index');
    }
}
