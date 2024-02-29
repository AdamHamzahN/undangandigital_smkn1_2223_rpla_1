@extends('template.admin')
@section('title', 'dashboard')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="header">
                <h1><b>DASHBOARD</b></h1>
            </div>
            <div class="content">
                {{-- tema yang paling banyak digunakan --}}
                <div class="row">
                    <div class="col-sm">
                        <div class="card card-tema">
                            <div class="card-header bg-primary">
                                <h4 class="text-white">Jumlah Tema Yang Paling Banyak DiJual</h1>
                            </div>
                            <div class="card-body ">
                                @foreach ($datatema as $tema)
                                    <h3>{{ $tema->nama_tema }} : {{ $tema->jumlah_pembelian_tema }}</h5>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- tabel pesanan terbaru --}}
                    <div class="col-sm">
                        <div class="card card-tema">
                            <div class="card-header">
                                <table class="table DataTable table-hovered table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Id Pesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Kontak</th>
                                            <th>Tanggal Pemesanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($datapesanan as $pesanan)
                                                <td>{{ $pesanan->id_pesanan }}</td>
                                                <td>{{ $pemesan->nama_pemesan }}</td>
                                                <td></td>
                                                
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm">
                            <div class="card card-tema">
                                <div class="card-header bg-primary">
                                    <h4 class="text-white">Jumlah Paket Yang Paling Banyak Dijual</h1>
                                </div>
                                <div class="card-body">
                                    @foreach ($datapaket as $paket)
                                        <h3>{{ $paket->nama_paket }} : {{ $paket->jumlah_pembelian_paket }}</h5>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- tabel pesanan terbaru --}}
                        <div class="col-sm">
                            <div class="card card-tema">
                                <div class="card-header">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('footer')
        <script type="module"></script>
    @endsection
