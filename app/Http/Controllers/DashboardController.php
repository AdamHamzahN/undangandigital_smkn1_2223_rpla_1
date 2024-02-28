<?php

namespace App\Http\Controllers;

use App\Models\paket;
use App\Models\pembayaran;
use App\Models\pesanan;
use App\Models\tema;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    // //
    // protected $pesananModel;

    // public function __construct()
    // {
    //     $this->pesananModel = new pesanan();
    // }
    public function index(){
        $data =[
            'datatema'=>tema::orderBy('jumlah_pembelian_tema','desc')->take(3)->get(),
            'datapaket'=>paket::orderBy('jumlah_pembelian_paket','desc')->take(3)->get(),
            'datapembayaran'=>pembayaran::latest()->paginate(5),
            'datapesanan'=>pesanan::latest()->paginate(5)
        ];
        return view('admin.dashboard',$data);
    }

    // public function dataPesanan(Request $request)
    // {
    //     /**
    //      * method ini sbg endpoint API untuk 
    //      * Datatable serverside
    //      */

    //     if ($request->ajax()) :
    //         $data =[
    //             $this->pesananModel->with('undangan')->get(),
    //             $this->pesananModel->with('pemesan')->get()
    //         ];
    //         return DataTables::of($data)->toJson();
    //     endif;
    // }
}
