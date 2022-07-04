<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusAirController extends Controller
{
    public function index()
    {
        return view('master.statusAir.index');
    }
}
