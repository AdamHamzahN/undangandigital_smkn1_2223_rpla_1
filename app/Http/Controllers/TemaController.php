<?php

namespace App\Http\Controllers;

use App\Models\tema;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class TemaController extends Controller
{
    //
    protected $temaModel;

    public function __construct(){
        $this->temaModel = new tema();
    }
    public function index(){
        $data =[
            'tema'=>tema::all()
        ];
        return view('admin.tema.index');
    }
    public function tambah(){
        return view('admin.tema.tambah');
    }

    public function dataTema(Request $request){
        if($request->ajax()){
            $data = $this->temaModel->get();
            return DataTables::of($data)->toJson();
        }
    }
}
