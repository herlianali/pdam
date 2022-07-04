<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusMeterController extends Controller
{
    public function index()
    {
        return view('master.statusMeter.index');
    }
}
