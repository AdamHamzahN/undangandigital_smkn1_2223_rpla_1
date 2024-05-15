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

    public function register(Request $request)
    {
        return view('formundangan/register');
    }
}
