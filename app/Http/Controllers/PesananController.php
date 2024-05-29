<?php

namespace App\Http\Controllers;

use App\Models\akad;
use App\Models\paket;
use App\Models\pemesan;
use App\Models\pengantin;
use App\Models\pesanan;
use App\Models\resepsi;
use App\Models\tema;
use App\Models\undangan;
use Illuminate\Auth\Events\Validated;
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

    //tambah
    public function tambahPemesan()
    {
        return view('admin.pesanan.tambah.tambahpemesan');
    }
    public function tambahDetailUndangan()
    {
        $data = [
            'temas' => tema::all(),
            'pakets' => paket::all(),
            'pemesans' => pemesan::all()
        ];
        return view('admin.pesanan.tambah.tambahdetailundangan', $data);
    }

    public function simpanPemesan(Request $request)
    {
        $data = $request->all();
        $perintah = pemesan::create($data);

        if ($perintah) {
            return redirect()->route('pesanan.tambahdetailundangan')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('pesanan.tambahpemesan')->with('failed', 'Data gagal ditambahkan');
        }
    }

    public function simpanDetailUndangan(Request $request)
    {
        $pengantin = new pengantin();
        $pengantin->nama_pengantin_pria = $request->nama_pengantin_pria;
        $pengantin->nama_panggilan_pria = $request->nama_panggilan_pria;
        $pengantin->nama_ayah_pria = $request->nama_ayah_pria;
        $pengantin->nama_ibu_pria = $request->nama_ibu_pria;
        $pengantin->nama_pengantin_wanita = $request->nama_pengantin_wanita;
        $pengantin->nama_panggilan_wanita = $request->nama_panggilan_wanita;
        $pengantin->nama_ayah_wanita = $request->nama_ayah_wanita;
        $pengantin->nama_ibu_wanita = $request->nama_ibu_wanita;
        $pengantin->save();


        $akad = new akad();
        $akad->nama_tempat = $request->nama_tempat_akad;
        $akad->waktu = $request->waktu_akad;
        $akad->koordinat = $request->koordinat_akad;
        $akad->save();

        $resepsi = new resepsi();
        $resepsi->nama_tempat = $request->nama_tempat_resepsi;
        $resepsi->waktu = $request->waktu_resepsi;
        $resepsi->koordinat = $request->koordinat_resepsi;
        $resepsi->save();

        $undangan = new undangan();
        $undangan->id_pengantin = $pengantin->id;
        $undangan->id_akad = $akad->id;
        $undangan->id_resepsi = $resepsi->id;
        // Atur atribut-atribut lain yang relevan untuk undangan
        $undangan->save();

        $pesanan = new pesanan();
        $pesanan->id_paket = $request->id_paket;
        $pesanan->id_tema = $request->id_tema;
        $pesanan->id_pemesan = $request->id_pemesan;
        $pesanan->id_undangan = $undangan->id;
        $pesanan->save();
        // Periksa apakah penyimpanan berhasil
        if ($pengantin->save() && $akad->save() && $resepsi->save() && $undangan->save() && $pesanan->save()) {
            // Redirect ke halaman yang sesuai jika penyimpanan berhasil
            return redirect()->route('pesanan.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            // Redirect kembali ke halaman yang sama jika terjadi kesalahan
            return redirect()->back()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
        }
    }

    public function delete(Request $request)
    {
        /**
         * method ini hanya bisa diakses dengan http request POST
         * 
         */
        $hapusPesanan = pesanan::where('id_pesanan', $request->id_pesanan)->delete();
        $hapusUndangan = undangan::where('id_undangan', $request->id_undangan)->delete();
        // $hapusPemesan = pemesan::where('id_pemesan','=',paket::where('id_pemesan' 
        if ($hapusPesanan && $hapusUndangan) {
            $pesan = [
                'status' => 'success',
                'pesan' => 'Data Berhasil Dihapus'
            ];
        } else {
            $pesan = [
                'status' => 'failed',
                'pesan' => 'Data Gagal Dihapus'
            ];
        }
        return response()->json($pesan);
    }

    public function edit(Request $request){
        $data = [
            'pesanan'=>pesanan::where('id_pesanan','=',$request->id_pesanan)->first(),
            'pakets'=>paket::all(),
            'temas'=>tema::all()
        ];
        return view('admin.pesanan.edit',$data);
    }

    public function update(Request $request){
        $data = $request->validate([
            'id_pesanan'=>'required',
            'id_tema'=>'required',
            'id_paket'=>'required',
        ]);

        $update = pesanan::where('id_pesanan',$request->id_pesanan)->update($data);

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

    public function detailUndangan(Request $request){
        $data = [
            'undangans' => undangan::where('id_undangan', $request->id_undangan)->first(),
            'akads'=>akad::where('id_akad',$request->id_undangan)->first(),
            'resepsis'=>resepsi::where('id_resepsi',$request->id_undangan)->first(),
            'pengantins'=>pengantin::where('id_pengantin',$request->id_undangan)->first(),
            'pesanans'=>pesanan::where('id_pesanan',$request->id_undangan)->first()
        ];
        return view('admin.pesanan.detailundangan', $data);
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
