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
        $auth = Secman::whereRaw("userid = '".$request->username."' AND passw = '".md5($request->password)."'")
                        ->first();
        if ($auth) {
            session([
                'login'    => true,
                'username' => $auth->username
            ]);
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
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
