<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KondisiTutupanController extends Controller
{
    public function index()
    {
        return view('master.kondisiTutupan.index');
    }
}
