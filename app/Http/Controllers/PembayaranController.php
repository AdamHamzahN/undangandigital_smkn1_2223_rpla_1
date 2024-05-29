<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PembayaranController extends Controller
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
            'pembayarans.created_at', // Tambahkan created_at
            'pembayarans.updated_at'  // Tambahkan updated_at
        )
            ->join('pesanans', 'pesanans.id_pesanan', '=', 'pembayarans.id_pesanan')
            ->join('pakets', 'pakets.id_paket', '=', 'pesanans.id_paket')
            ->join('pemesans', 'pemesans.id_pemesan', '=', 'pesanans.id_pemesan');
    }

    public function index()
    {
        return view('admin.pembayaran.index');
    }


    public function edit(Request $request)
    {
        $data = [
            'dataPembayaran' => $this->dataPembayaran->where('id_pembayaran', $request->id_pembayaran)->get(),
            'pembayaran' => pembayaran::where('id_pembayaran', '=', $request->id_pembayaran)->first(),
        ];
        return view('admin.pembayaran.edit', $data);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id_pembayaran' => 'required',
            'status_pembayaran' => 'required',
        ]);

        $update = pembayaran::where('id_pembayaran', $request->id_pembayaran)->update($data);
        if ($update) {
            $pesan = [
                'status' => 'success',
                'pesan' => 'Data Berhasil Diupdate'
            ];
        } else {
            $pesan = [
                'status' => 'failed',
                'pesan' => 'Data Gagal Diupdate'
            ];
        }
        return response()->json($pesan);
    }


    public function dataPembayaran(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->dataPembayaran->get();
            return DataTables::of($data)->editColumn('created_at', function ($row) {
                return $row->created_at->format('Y-m-d H:i:s');
            })
                ->editColumn('updated_at', function ($row) {
                    return $row->updated_at->format('Y-m-d H:i:s');
                })->toJson();
        }
    }
}
