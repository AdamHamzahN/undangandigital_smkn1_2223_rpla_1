<?php

namespace App\Http\Controllers;

use App\Models\paket;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PaketController extends Controller
{
    protected $paketModel;

    public function __construct(){
        $this->paketModel = new paket();
    }
    public function index(){
        $data =[
            'tema'=>paket::all()
        ];
        return view('admin.paket.index');
    }
    public function tambah(){
        return view('admin.paket.tambah');
    }

    public function dataTema(Request $request){
        if($request->ajax()){
            $data = $this->paketModel->get();
            return DataTables::of($data)->toJson();
        }
    }
}
