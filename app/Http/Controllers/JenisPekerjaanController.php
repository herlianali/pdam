<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPekerjaanController extends Controller
{
    public function index()
    {
        return view('jenisPekerjaan.index');
    }
}
