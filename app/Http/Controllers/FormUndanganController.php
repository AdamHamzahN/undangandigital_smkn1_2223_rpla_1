<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormUndanganController extends Controller
{
    //
    public function FormUndangan(){
        return view('formundangan.index');
    }
}
