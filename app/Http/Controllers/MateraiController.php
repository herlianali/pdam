<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateraiController extends Controller
{
    public function index()
    {
        return view('master.materai.index');
    }
}
