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

    public function index()
    {
        $data = [
            'pesanan' => pesanan::all(),
        ];
        return view('admin.pesanan.index', $data);
    }


    public function dataPesanan(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->pesananModel->with('pemesan', 'undangan', 'paket', 'tema')->get();
            return DataTables::of($data)->editColumn('created_at', function ($row) {
                return $row->created_at->format('Y-m-d H:i:s');
            })
                ->editColumn('updated_at', function ($row) {
                    return $row->updated_at->format('Y-m-d H:i:s');
                })->toJson();
        }
    }
}
