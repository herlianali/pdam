<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MLNCodeController extends Controller
{
    public function index()
    {
        return view('master.mlnCode.index');
    }
}
