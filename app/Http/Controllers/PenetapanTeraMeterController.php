<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenetapanTeraMeterController extends Controller
{
    public function index()
    {
        return view('master.penetapanTeraMeter.index');
    }
    public function print()
    {
        return view('master.penetapanTeraMeter.print');
    }
    public function create()
    {
        return view('master.penetapanTeraMeter.create');
    }
    
}
