<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPemakaian;

class RiwayatPemakaianController extends Controller
{
       
    public function index()
    {
        
        $rwPemakaians = RiwayatPemakaian::all();
        return view('pengaduan.riwayatPemakaian.index', compact('rwPemakaians'))->with('i');
    }

    public function detail()
    {
        return view('pengaduan.riwayatPemakaian.detail');
    }

    public function pelanggaran()
    {
        return view('pengaduan.riwayatPemakaian.pelanggaran');
    }

    
    public function infoPelanggaran()
    {
        return view('pengaduan.riwayatPemakaian.infoPelanggaran');
    }
    public function kartuPelanggan()
    {
        return view('pengaduan.riwayatPemakaian.kartuPelanggan');
    }

}
