<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $auth = DB::table('USERS')
                    ->whereRaw("users = '".$request->username."' AND passwd = '".$request->password."'")
                    ->first();

        if ($auth) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout()
    {

    }
}
