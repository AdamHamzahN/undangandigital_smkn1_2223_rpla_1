<?php

namespace App\Http\Controllers;

use App\Http\Requests\paketStoreRequest;
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
            'paket'=>paket::all()
        ];
        return view('admin.paket.index');
    }
    public function tambah(){
        return view('admin.paket.tambah');
    }

    public function edit(Request $request)
    {
        /**
         * method ini hanya bisa diakses dengan http request GET
         */
        $data = [
            'paket' => paket::where('id_paket', $request->id_paket)->first()
        ];

        return view('admin.paket.edit', $data);
    }

    public function simpan(paketStoreRequest $request)
    {
        /**
         * meniympan data yang di input dari function tambah
         */

        $validated = $request->validated();


        if ($validated) {
            if (isset($request->id_paket)) :
                //update
                $perintah = paket::where('id_paket', $request->id_paket)->update($validated);
                if ($perintah) {
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
            else :
                //buat data baru
                $perintah = paket::create($validated);
                if ($perintah) {
                    $pesan = [
                        'status' => 'success',
                        'pesan' => 'Data Berhasil Ditambahkan'
                    ];
                } else {
                    $pesan = [
                        'status' => 'failed',
                        'pesan' => 'Data Gagal Ditambahkan'
                    ];
                }
            endif;
        } else {
            $pesan = [
                'status' => 'success',
                'pesan' => 'Data Gagal Ditambahkan,periksa kembali isian form nya'
            ];
        }


        return response()->json($pesan);
    }


    public function delete(Request $request)
    {
        /**
         * method ini hanya bisa diakses dengan http request POST
         * 
         */
        $hapus = paket::where('id_paket',$request->id_paket)->delete();
        if ($hapus) {
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

    public function dataPaket(Request $request){
        if($request->ajax()){
            $data = $this->paketModel->get();
            return DataTables::of($data)->toJson();
        }
    }
}
