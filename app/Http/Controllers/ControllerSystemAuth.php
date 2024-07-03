<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerSystemAuth extends Controller
{
    public function index()
    {
        session()->forget('VarSesiNamaUser');
        return view('web/login');
    }

    public function login(Request $request)
    {
        $MyGetDataLogin = DB::table('users')->where(['username' => trim($request->txtUsername), 'password_user' => $request->txtPassword])->get();
        if (count($MyGetDataLogin) >= 1) {
            foreach ($MyGetDataLogin as $row) {
                $request->session()->put('VarSesiNamaUser', $row->nama_user);
                return redirect('/1/pemilik');
            }
        } else {
            return redirect('/dashboard1');
        }
    }
}
