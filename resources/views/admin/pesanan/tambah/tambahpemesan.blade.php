@extends('template.admin')
@section('title', 'pesanan')
@section('content')
    <div class="row">
        <div clo-lg-12>
            <div class="card my-2">
                <div class="card-header">
                    <h1>Tambah Pemesan</h1>
                </div>
                <form method="POST" id="formTambah" action="{{ url('/admin/pesanan/simpanpemesan') }}">
                    <div class="card-body">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="nama_pemesan">Nama Pemesan</label>
                                <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="kontak">Kontak Pemesan</label>
                                <input type="text" name="kontak" id="kontak" class="form-control" />
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
