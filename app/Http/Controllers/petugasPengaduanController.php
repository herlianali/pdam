<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasPengaduanController extends Controller
{
    public function index()
    {
        return view('petugasPengaduan.index');
    }
}
