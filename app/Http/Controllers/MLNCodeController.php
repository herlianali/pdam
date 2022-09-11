<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MLNCode;

class MLNCodeController extends Controller
{ public function index()
    {
      
        
        $ml = MLNCode::all();
        return view('master.mlnCode.index', compact('ml'))->with('i');
     
    }
  

    public function print()
    {
        return view('master.mlnCode.print');
    }
    
}
