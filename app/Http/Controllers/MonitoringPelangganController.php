<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringPelangganController extends Controller
{
    public function index()
    {
        return view('master.monitoringPelanggan.index');
    }
}
