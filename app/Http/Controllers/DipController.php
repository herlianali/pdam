<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dip;
use Illuminate\Http\Request;

class DipController extends Controller
{
    public function show($nip)
    {
        $ptsPengaduan = new Dip;
        return response()->json($ptsPengaduan->getByNip($nip));
    }
}
