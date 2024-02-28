<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function login()
    {
        return view('admin.login.index');
    }

    function check(Request $request)
    {
        $data = $request->validate([
            'nama_admin' => ['required'],
            'password' => ['required']
        ]);

        $admin = [
            'nama_admin' => $data['nama_admin']
        ];
        $check = admin::where('nama_admin', '=', $request->nama_admin)
            ->where('password', '=', $request->password)
            ->exists();
        if ($check) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('login.index');
        }
    }
}
