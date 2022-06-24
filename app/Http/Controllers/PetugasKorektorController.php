<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasKorektorController extends Controller
{
    public function index()
    {
        return view('petugasKorektor.index');
    }
}
