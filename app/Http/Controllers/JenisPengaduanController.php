<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPengaduanController extends Controller
{
    public function index()
    {
        return view('jenisPengaduan.index');
    }
}
