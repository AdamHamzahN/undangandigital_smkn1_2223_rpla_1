<?php

namespace App\Http\Controllers;

use App\Http\Requests\temaStoreRequest;
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

    public function edit(Request $request)
    {
        /**
         * method ini hanya bisa diakses dengan http request GET
         */
        $data = [
            'tema' => tema::where('id_tema', $request->id_tema)->first()
        ];

        return view('admin.tema.edit', $data);
    }

    public function simpan(temaStoreRequest $request)
    {
        /**
         * meniympan data yang di input dari function tambah
         */

        $validated = $request->validated();


        if ($validated) {
            if (isset($request->id_tema)) :
                //update
                $perintah = tema::where('id_tema', $request->id_tema)->update($validated);
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
                $perintah = tema::create($validated);
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
        $hapus = tema::where('id_tema',$request->id_tema)->delete();
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

    public function dataTema(Request $request){
        if($request->ajax()){
            $data = $this->temaModel->get();
            return DataTables::of($data)->toJson();
        }
    }
}
