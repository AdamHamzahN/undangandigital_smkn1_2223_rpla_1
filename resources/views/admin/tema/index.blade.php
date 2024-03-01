@extends('template.admin')
@section('title', 'tema')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="header">
                <h1><b>TEMA</b></h1>
            </div>
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm"> <h4>Tabel Tema</h4></div>
                            <div class="col-sm text-end"> <button class="btn btn-success btnTambahBarang " data-bs-target="#modalForm" data-bs-toggle="modal"
                            attr-href={{ route('tema.tambah') }}><i class="bi bi-plus-lg"></i>Tambah</button></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="DataTable table-hovered table-bordered table-striped table-responsive text-center">
                            <thead>
                                <tr>
                                    <th>Id Tema</th>
                                    <th>Nama Tema</th>
                                    <th>jumlah_pembelian_tema</th>
                                    <th>Tanggal DiTambahkan</th>
                                    <th>Terakhir Update</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="modalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary justify-content-center">
                    <h3 class="modal-title text-center text-light"></h3>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body ">

                </div>
                <div class="modal-footer bg-body">
                    <button class="btn btn-success btnSimpanBarang"><i class="bi bi-save"></i> Simpan</button>
                    <button class="btn btn-primary " data-bs-dismiss="modal">Batal</button>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('footer')
    <script type="module">
        //Judul Modal
        function changeHTML(element, find, text) {
            $(element).find(find).html();
            return $(element).find(find).html(text).promise().done();
        }

        // DataTable
        var table = $('.DataTable').DataTable({
            processing: true,
            ServerSide: true,
            ajax: "{!! route('tema.data') !!}",
            columns: [{
                    data: 'id_tema',
                    name: 'id_tema',
                },
                {
                    data: 'nama_tema',
                    name: 'nama_tema',
                },
                {
                    data: 'jumlah_pembelian_tema',
                    name: 'jumlah_pembelian_tema',
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'updated_at',
                    name: 'updated_at',
                },
                {

                    render: function(data, type, row) {
                        return "<btn class='btn btn-primary editBtn' data-bs-toggle='modal' data-bs-target='#modalForm' attr-href='{!! url('/barang/edit/"+row.id_tema+"') !!}'><i class='bi bi-pencil'></i>Edit</btn><btn class='btn btn-danger btnHapusBarang' attr-id='" +
                            row.id_tema + "'><i class='bi bi-trash'></i>Hapus</btn>"
                    }
                }
            ]
        });

        $('.btnTambahBarang').on('click', function(a) {
            changeHTML('#modalForm', '.modal-title', 'Tambah Tema');
            const modalForm = document.getElementById('modalForm');
            modalForm.addEventListener('shown.bs.modal', function(eventTambah) {
                eventTambah.preventDefault();
                eventTambah.stopImmediatePropagation();
                const link = eventTambah.relatedTarget.getAttribute('attr-href');
                // alert(link);
                //const modalData = document.querySelector('#modalForm .modal-body');
                // $(".modal-header .modal-title").html("Tambah data Barang Baru");
                axios.get(link).then(response => {
                    $("#modalForm .modal-body").html(response.data);
                });
                //Contoh Ajax
                //
                // $.ajax(({
                //     url:link,
                //     method: 'GET',
                //     success: function(response){
                //         $('modalForm .modal-body').html('p');
                //     }
                //}))

                //simpan
                $('.btnSimpanBarang').on('click', function(submitEvent) {
                    submitEvent.stopImmediatePropagation();
                    // var data = {
                    //     'kode_barang': $('#kode_barang').val(),
                    //     'nama_barang': $('#nama_barang').val(),
                    //     'harga': $('#harga').val(),
                    //     '_token': "{{ csrf_token() }}"
                    // }
                    if (data.kode_barang !== '' && data.nama_barang !== '' && data.harga !== '') {
                        axios.post('{{ url('/barang/simpan') }}', data).then(resp => {
                            if (resp.data.status == 'success') {
                                //tampilkan pop up berhasil;
                                Swal.fire({
                                    title: "berhasil!",
                                    text: resp.data.pesan,
                                    icon: "success"
                                }).then(() => {
                                    //close modal
                                    modal.hide();
                                    //reload tabel
                                    table.ajax.reload();

                                });
                            } else {
                                //tampilkan pop up gagal
                                Swal.fire({
                                    title: "GAGAL",
                                    text: resp.data.pesan,
                                    icon: "error"
                                });
                            }
                        });
                    } else {
                        alert('data tidak boleh kosong');
                    }

                });
            });
            modalForm.addEventListener('hidden.bs.modal', function(closeEvent) {
                closeEvent.preventDefault();
                closeEvent.stopImmediatePropagation();

                $('#modalForm').removeData();
            });
        });
    </script>
@endsection
