<?php

namespace App\Http\Controllers;

use App\Models\kartu_ucapan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    //
    public function index()
    {
        return  view('undangan.index');
    }


    public function index2(Request $request)
    {
        $data = [
            'ucapans' => kartu_ucapan::where('id_undangan', $request->id_undangan)->get(),
            'id_undangans'=> $request->id_undangan
        ];
        return view('undangan2.index', $data);
    }

    
    public function kirimUcapan(Request $request)
    {
        $data = $request->validate([
            'id_undangan' => ['required'],
            'nama' => ['required'],
            'ucapan' => ['required'],

        ]);

        $insert = kartu_ucapan::create($data);

        if ($insert) {
            return response([
                'status' => 'success',
                'pesan' => 'ucapan berhasil dikirim'
            ]);
        }else{
            return response([
                'status' => 'failed',
                'pesan' => 'ucapan gagal dikirim'
            ]);
        }
    }
}
