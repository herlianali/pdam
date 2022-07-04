<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusTanahController extends Controller
{
    public function index()
    {
        return view('master.statusTanah.index');
    }
}
