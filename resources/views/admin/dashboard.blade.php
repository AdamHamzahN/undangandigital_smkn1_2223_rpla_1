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
                                <h3>Pesanan Terbaru</h3>
                                <table class="table DataTable table-hovered table-bordered table-striped table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Nomor Pesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Kontak</th>
                                            <th>Tanggal Pemesanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datapesanan as $pesanan)
                                            <tr>
                                                <td>{{ $pesanan->id_pesanan }}</td>
                                                @foreach ($datapemesan as $pemesan)
                                                    @if ($pemesan->id_pemesan === $pesanan->id_pemesan)
                                                        <td>{{ $pemesan->nama_pemesan }}</td>
                                                        <td>{{ $pemesan->kontak }}</td>
                                                    @endif
                                                @endforeach
                                                <td>{{ $pesanan->created_at }}</td>
                                            </tr>
                                        @endforeach
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
                                    <h4>History Pembayaran Terbaru</h4>
                                    <table
                                        class="table DataTable table-hovered table-bordered table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Nomor Pesanan</th>
                                                <th>Nama Pemesan</th>
                                                <th>Total Harga</th>
                                                <th>Status Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datapembayaran as $pembayaran)
                                                <tr>
                                                    <td>{{ $pembayaran->id_pesanan }}</td>
                                                    <td>{{ $pembayaran->nama_pemesan }}</td>
                                                    <td>{{ $pembayaran->harga }}</td>
                                                    <td>{{ $pembayaran->status_pembayaran }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
