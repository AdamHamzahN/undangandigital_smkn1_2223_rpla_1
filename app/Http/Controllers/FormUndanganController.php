<?php

namespace App\Http\Controllers;

use App\Models\akad;
use App\Models\pemesan;
use App\Models\pengantin;
use App\Models\resepsi;
use App\Models\tamu;
use Illuminate\Http\Request;

class FormUndanganController extends Controller
{
    //
    public function index()
    {

        $data = [
            'pemesan' => tamu::all()
        ];
        return view('formundangan.index', $data);
    }
    public function simpan(Request $request)
    {
        $data = $request->validate([
            'nama_pemesan' => 'required',
            'kontak' => 'required',
        ]);
        //Buat data baru
        $perintah = pemesan::create($data);
        if ($perintah) {
            return redirect()->to('/formundangan/register');
        } else {
            return route('/formundangan/index');
        }
    }

    public function register()
    {

        $data = [
            'pengantin' => pengantin::all()
        ];
        return view('formundangan.register', $data);
    }
    public function simpanpengantin(Request $request)
    {
        $data = $request->validate([
            'nama_pengantin_pria' => 'required',
            'nama_pengantin_wanita' => 'required',
            'nama_panggilan_pria' => 'required',
            'nama_panggilan_wanita' => 'required',
            'nama_ayah_pria' => 'required',
            'nama_ayah_wanita' => 'required',
            'nama_ibu_pria' => 'required',
            'nama_ibu_wanita' => 'required',
        ]);
        //Buat data baru
        $perintah = pengantin::create($data);
        if ($perintah) {
            return redirect()->to('/formundangan/register2');
        } else {
            return route('/formundangan/register');
        }
    }

    public function register2()
    {
        return view('formundangan.register2');
    }
    public function simpanacara(Request $request)
    {


        $akad = new akad();
        $akad->waktu = $request->waktu_akad;
        $akad->nama_tempat = $request->alamat_akad;
        $akad->koordinat = $request->map_akad;
        $insertAkad =  $akad->save();

        $resepsi = new resepsi();
        $resepsi->waktu = $request->waktu_resepsi;
        $resepsi->nama_tempat = $request->alamat_resepsi;
        $resepsi->koordinat = $request->map_resepsi;
        $insertResepsi = $resepsi->save();


        if ($insertAkad&&$insertResepsi) {
            return redirect()->to('/formundangan/register3');
        } else {
            return route('/formundangan/register2');
        }
    }

    public function register3(Request $requeest)
    {
        return view('formundangan.register3');
    }

    public function penutup(Request $requeest)
    {
        return view('formundangan.penutup');
    }
}
