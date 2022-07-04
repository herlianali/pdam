<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilayahDistribusiController extends Controller
{
    public function index()
    {
        return view('master.wilayahDistribusi.index');
    }
}
