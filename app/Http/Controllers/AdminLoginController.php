<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    function index()
    {
        return view('admin.login.index');
    }

    public function check(Request $request)
    {
        $postData = $request->validate([
            'nama_admin' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($postData)) {
            $request->session()->regenerate();
            return response([
                'success' => true,
                'pesan' => 'login berhasil',
                'redirect_url' => 'admin/dashboard/'
            ]);
        } else {
            return response([
                'success' => false,
                'pesan' => 'login gagal',
            ], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login', 302);
    }
}
