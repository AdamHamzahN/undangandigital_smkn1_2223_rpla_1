<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormUndanganController extends Controller
{
    //
    public function index()
    {
        return view('formundangan.index');
    }

    public function register(Request $requeest)
    {
        return view('formundangan.register');
    }

    public function register2(Request $requeest)
    {
        return view('formundangan.register2');
    }

    public function register3(Request $requeest)
    {
        return view('formundangan.register3');
    }

    public function register4(Request $requeest)
    {
        return view('formundangan.register4');
    }

    public function tamu(Request $requeest)
    {
        return view('formundangan.tamu');
    }

    public function registertamu(Request $requeest)
    {
        return view('formundangan.registertamu');
    }

    public function penutup(Request $requeest)
    {
        return view('formundangan.penutup');
    }
}
