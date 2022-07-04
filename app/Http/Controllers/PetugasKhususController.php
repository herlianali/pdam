<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasKhususController extends Controller
{
    public function index()
    {
        return view('master.petugasKhusus.index');
    }
}
