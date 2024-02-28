<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PesananController extends Controller
{
    protected $pesananModel;


    public function __construct()
    {
        $this->pesananModel = new pesanan();
    }


    public function dataPesanan(Request $request)
    {
        /**
         * method ini sbg endpoint API untuk 
         * Datatable serverside
         */

        if ($request->ajax()) :
            $data =[
               // $this->pesananModel->with('undangan')->get(),
                $this->pesananModel->with('pemesan')->get()
            ];
            return DataTables::of($data)->toJson();
        endif;
    }
}
