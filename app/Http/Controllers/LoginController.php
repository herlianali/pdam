<?php

namespace App\Http\Controllers;

use App\Models\Secman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $auth = Secman::whereRaw("username = '".$request->username."' AND passw = '".md5($request->password)."'")
                        ->first();
        if ($auth) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function logoutUser()
    {
        Session::forget('key');
        if(!Session::has('key'))
         {
            return redirect('/');
         }
    }
}
