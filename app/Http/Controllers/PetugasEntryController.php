<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasEntryController extends Controller
{
    public function index() {
        return view('master.petugasEntry.index');
    }
}
