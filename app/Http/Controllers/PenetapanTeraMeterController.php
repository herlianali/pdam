<?php

namespace App\Http\Controllers;

use App\Models\Bonc;
use App\Models\PenetapanTeraMeter;
use App\Models\Pengaduan;
use App\Models\PetugasCS;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenetapanTeraMeterController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->format('Y-m-d');
        $getlast = new PenetapanTeraMeter;
        $no = (int)$getlast->getLast()+1;
        $getByBonc = new Bonc;
        // $ptg = new PetugasCS;
        // $petcs  = $ptg->getData();
        $bonc = $getByBonc->getByBonc('BCL-95');
        // dd($bonc);
        $getUkuran = new PenetapanTeraMeter;
        return view('master.penetapanTeraMeter.index', compact('date', 'getlast', 'no'))->with('i');
    }

    public function store(Request $request)
    {
        //dd($request->post());
        PenetapanTeraMeter::insert([
            'no_tera'           => $request->no_tera,
            'tgl_tera'          => $request->date,
            'no_bonc'           => $request->no_bonc,
            'uk_meter'          => $request->ukuran_mtr,
            'biaya_tera'        => $request->biaya_tera,
            'total_biaya'       => $request->total_biaya,
            'nama_pengadu'      => $request->nama_pengadu,
            'alamat_pengadu'    => $request->alamat_pengadu,
            'telp_pengadu'      => $request->telp_pengadu
        ]);
        
        return redirect()->route('penetapanTeraMeter');
    }

    public function show($no_bonc)
    {
        $getByBonc = Bonc::getByBonc($no_bonc);

        // var_dump($getByBonc);
        // $penetapanTeraMeter = PenetapanTeraMeter::select('no_plg', 'nama', 'alamat', 'kd_tarif', 'ukuran_mtr', 'biaya_tera', 'total_biaya')
        //                                 ->where('no_bonc', $no_bonc)
        //                                 ->first();
        return response()->json($getByBonc);
    }

    public function filter()
    {
        $petcs  = PetugasCS::getData();
        //dd($petcs);
        // return view('master.penetapanTeraMeter.filter', compact(['petcs']))->with('i');
    }

    public function print()
    {
        // $petcs  = PetugasCS::getData();
        return view('master.penetapanTeraMeter.print');
    }
    public function create()
    {
        return view('master.penetapanTeraMeter.create');
    }

}
