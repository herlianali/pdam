<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MLNCode;

class MLNCodeController extends Controller
{
    public function index()
    {
        $mlncode = new MLNCode;
        $m = $mlncode->getMCode();
        $l = $mlncode->getLCode();
        $n = $mlncode->getNCode();

        // $ml = MLNCode::all();
        return view('master.mlnCode.index', compact(['m', 'l', 'n']))->with('i');

    }

    public function store(Request $request)
    {
        $mlncode = new MLNCode;
        $data = [
            'kode'       => $request->code.$request->kode,
            'keterangan' => $request->keterangan
        ];

        if($request->code == "M"){
            // echo "codenya M";
            $mlncode->insertM($data);
        }elseif($request->code == "L"){
            // echo "codenya L";
            $mlncode->insertL($data);
        }else{
            // echo "codenya N";
            $mlncode->insertN($data);
        }

        return redirect()->route('mlnCode.index');
    }

    public function show($code)
    {
        $mlncode = new MLNCode;
        $kode = substr($code, 0, 1);
        if($kode == "M"){
            $code = $mlncode->getByM($code);
        }elseif($kode == "L"){
            $code = $mlncode->getByL($code);
        }else{
            $code = $mlncode->getByN($code);
        }
        return response()->json($code);
    }

    public function update(Request $request, $code)
    {
        $mlncode = new MLNCode;
        $data = [
            'kode'       => $request->kode,
            'keterangan' => $request->keterangan
        ];
        $kode = substr($code, 0, 1);
        if($kode == "M"){
            $mlncode->updateM($code, $data);

        }elseif($kode == "L"){
            $mlncode->updateL($code, $data);

        }else{
            $mlncode->updateN($code, $data);

        }

        return redirect()->route('mlnCode.index');
    }

    public function destroy($code)
    {
        $mlncode = new MLNCode;
        $kode = substr($code, 0, 1);
        if($kode == "M"){
            $mlncode->deleteM($code);
        }elseif($kode == "L"){
            $mlncode->deleteL($code);
        }else{
            $mlncode->deleteN($code);
        }
        return response()->json([
            'success' => true,
            'message' => 'Data Status Tanah Berhasil Dihapus',
        ]);
    }

    public function print()
    {
        return view('master.mlnCode.print');
    }

}
