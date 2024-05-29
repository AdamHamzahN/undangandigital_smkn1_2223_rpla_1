@extends('template.admin')
@section('title', 'Detail Undangan')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="my-2 button ml-auto">
                <a href="{{ url('/admin/pesanan/') }}" class="btn btn-primary position-fixed">Kembali</a>
            </div>
            <div class="col-lg-9 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-info">
                        <h1 class="text-white">Detail Pengantin Dan Acara</h1>
                    </div>
                    <div class="card-body ">
                        <div class="text-center">
                        </div>
                        <h4>Pengantin Pria</h4>
                        <hr>
                        <p class="card-text"><strong>Nama Lengkap Pengantin Pria:</strong>
                            {{ $pengantins->nama_pengantin_pria }}</p>
                        <p class="card-text"><strong>Nama Panggilan Pengantin Pria:</strong>
                            {{ $pengantins->nama_panggilan_pria }}</p>
                        <p class="card-text"><strong>Nama Ayah Pria:</strong> {{ $pengantins->nama_ayah_pria }}</p>
                        <p class="card-text"><strong>Nama Ibu Pria:</strong> {{ $pengantins->nama_ibu_pria }}</p>
                        <h4>Pengantin Wanita</h4>
                        <hr>
                        <p class="card-text"><strong>Nama Lengkap Pengantin Wanita:</strong>
                            {{ $pengantins->nama_pengantin_wanita }}</p>
                        <p class="card-text"><strong>Nama Panggilan Pengantin Wanita:</strong>
                            {{ $pengantins->nama_panggilan_wanita }}</p>
                        <p class="card-text"><strong>Nama Ayah Wanita:</strong> {{ $pengantins->nama_ayah_wanita }}</p>
                        <p class="card-text"><strong>Nama Ibu Wanita:</strong> {{ $pengantins->nama_ibu_wanita }}</p>
                        <h4>Detail Acara</h4>
                        <hr>
                        <p class="card-text"><strong>Tempat Akad:</strong> {{ $akads->nama_tempat }}</p>
                        <p class="card-text"><strong>Waktu Akad:</strong> {{ $akads->waktu }}</p>
                        <p class="card-text"><strong>Tempat Resepsi:</strong> {{ $resepsis->nama_tempat }}</p>
                        <p class="card-text"><strong>Waktu Resepsi:</strong> {{ $resepsis->waktu }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <p class="card-text"><strong>dibuat pada:</strong> {{ $pesanans->created_at }}</p>
                        <p class="card-text"><strong>diperbarui pada:</strong> {{ $pesanans->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
