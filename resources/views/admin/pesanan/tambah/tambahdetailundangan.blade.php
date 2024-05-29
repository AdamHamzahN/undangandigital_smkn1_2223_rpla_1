@extends('template.admin')
@section('title', 'pesanan')
@section('content')
    <div class="row">
        <div clo-lg-12>
            <div class="card my-2">
                <div class="card-header">
                    <h1>Tambah Pemesan</h1>
                </div>
                <form method="POST" id="formTambah" action="{{ url('/admin/pesanan/simpandetailundangan') }}">
                    <div class="card-body">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="nama_pengantin_pria">Nama Lengkap Pengantin Pria</label>
                                <input type="text" name="nama_pengantin_pria" id="nama_pengantin_pria"
                                    class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="nama_panggilan_pria">Nama Panggilan Pria</label>
                                <input type="text" name="nama_panggilan_pria" id="nama_panggilan_pria"
                                    class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="nama_pengantin_wanita">Nama Lengkap Pengantin Wanita</label>
                                <input type="text" name="nama_pengantin_wanita" id="nama_pengantin_wanita"
                                    class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="nama_panggilan_wanita">Nama Panggilan Wanita</label>
                                <input type="text" name="nama_panggilan_wanita" id="nama_panggilan_wanita"
                                    class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="nama_ayah_wanita">Nama Ayah Wanita</label>
                                <input type="text" name="nama_ayah_wanita" id="nama_ayah_wanita" class="form-control"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu_wanita">Nama Ibu Wanita</label>
                                <input type="text" name="nama_ibu_wanita" id="nama_ibu_wanita" class="form-control"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="nama_ayah_pria">Nama Ayah Pria</label>
                                <input type="text" name="nama_ayah_pria" id="nama_ayah_pria" class="form-control"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu_pria">Nama Ibu Pria</label>
                                <input type="text" name="nama_ibu_pria" id="nama_ibu_pria" class="form-control"
                                    required />
                            </div>

                            <hr>
                            <h2>Akad</h2>
                            <div class="form-group">
                                <label for="nama_tempat_akad">Tempat Akad</label>
                                <input type="text" name="nama_tempat_akad" id="nama_tempat_akad" class="form-control"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="waktu_akad">Waktu Akad</label>
                                <input type="date" name="waktu_akad" id="waktu_akad" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="koordinat_akad">koordinat</label>
                                <input type="text" name="koordinat_akad" id="koordinat_akad" class="form-control"
                                    required />
                            </div>
                            <hr>
                            <h2>Resepsi</h2>
                            <div class="form-group">
                                <label for="nama_tempat_resepsi">Tempat Resepsi</label>
                                <input type="text" name="nama_tempat_resepsi" id="nama_tempat_resepsi"
                                    class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="waktu_resepsi">Waktu Resepsi</label>
                                <input type="date" name="waktu_resepsi" id="waktu_resepsi" class="form-control"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="koordinat_resepsi">koordinat</label>
                                <input type="text" name="koordinat_resepsi" id="koordinat_resepsi" class="form-control"
                                    required />
                            </div>

                            <hr>
                            <h3>Detail Pesanan</h3>
                            <div class="form-group">
                                <label for="id_pemesan">Nama Pemesan</label>
                                <select name="id_pemesan" id="id_pemesan" class="form-control">
                                    @foreach ($pemesans as $pemesan)
                                        <option value="{{ $pemesan->id_pemesan }}">{{ $pemesan->nama_pemesan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_tema">Tema</label>
                                <select name="id_tema" id="id_tema" class="form-control">
                                    @foreach ($temas as $tema)
                                        <option value="{{ $tema->id_tema }}">{{ $tema->nama_tema }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_paket">Paket</label>
                                <select name="id_paket" id="id_paket" class="form-control">
                                    @foreach ($pakets as $paket)
                                        <option value="{{ $paket->id_paket }}">{{ $paket->nama_paket }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @csrf
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
