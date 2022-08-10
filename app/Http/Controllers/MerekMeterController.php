<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerekMeterController extends Controller
{
    public function index()
    {
        return view('master.merekMeter.index');
    }
}
