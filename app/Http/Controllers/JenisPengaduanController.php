<?php

namespace App\Http\Controllers;

use App\Models\JenisPengaduan;
use Illuminate\Http\Request;

class JenisPengaduanController extends Controller
{
    public function index()
    {
        $jenisPengaduans = JenisPengaduan::all();

        return view('jenisPengaduan.index', compact('jenisPengaduans'))->with('i');
    }
    // public function

    public function print()
    {
        return view('jenisPengaduan.print');
    }
}
