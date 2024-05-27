<?php

namespace App\Http\Controllers;

use App\Models\paket;
use App\Models\pembayaran;
use App\Models\pemesan;
use App\Models\pesanan;
use App\Models\tema;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    protected $dataPembayaran;

    public function __construct()
    {
        $this->dataPembayaran = Pembayaran::select(
            'pembayarans.id_pembayaran',
            'pembayarans.id_pesanan',
            'pakets.harga',
            'pemesans.nama_pemesan',
            'pembayarans.status_pembayaran',
            'pembayarans.created_at',
            'pembayarans.updated_at'
        )
            ->join('pesanans', 'pesanans.id_pesanan', '=', 'pembayarans.id_pesanan')
            ->join('pakets', 'pakets.id_paket', '=', 'pesanans.id_paket')
            ->join('pemesans', 'pemesans.id_pemesan', '=', 'pesanans.id_pemesan')
            ->latest() // Fetch the latest records
            ->take(5) // Take only the latest 5 records
            ->get(); // Fetch the data
    }

    public function index()
    {
        $data = [
            'datatema' => tema::orderBy('jumlah_pembelian_tema', 'desc')->take(3)->get(),
            'datapaket' => paket::orderBy('jumlah_pembelian_paket', 'desc')->take(3)->get(),
            'datapembayaran' => pembayaran::latest()->paginate(5),
            'datapesanan' => pesanan::latest()->paginate(5),
            'datapemesan' => Pemesan::orderByDesc('id_pemesan')->paginate(5),
            'datapembayaran'=>$this->dataPembayaran,
        ];
        return view('admin.dashboard', $data);
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
