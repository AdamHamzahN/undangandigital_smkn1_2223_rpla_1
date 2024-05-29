@extends('template.admin')
@section('title', 'pembayaran')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="header">
                <h1><b>Daftar Pembayaran</b></h1>
            </div>
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm">
                                <h4>Tabel Pembayaran</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="DataTable table-hovered table-bordered table-striped table-responsive text-center">
                            <thead>
                                <tr class="text-center">
                                    <th>Id Pembayaran</th>
                                    <th>Id Pesanan</th>
                                    <th>Nama Pemesan</th>
                                    <th>Total Biaya</th>
                                    <th>Status Pembayaran</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>aksi</th>
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
                    <h3 class="modal-title text-center text-light">Edit Status Pembayaran</h3>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body ">

                </div>
                <div class="modal-footer bg-body">
                    <button class="btn btn-success btnSimpan"><i class="bi bi-save"></i> Simpan</button>
                    <button class="btn btn-primary " data-bs-dismiss="modal">Batal</button>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('footer')
    <script type="module">
        const Modal = document.querySelector('#modalForm');
        const modal = bootstrap.Modal.getOrCreateInstance(Modal);
        // DataTable
        var table = $('.DataTable').DataTable({
            processing: true,
            responsive: true,
            ServerSide: true,
            ajax: "{!! route('pembayaran.data') !!}",
            columns: [{
                    data: 'id_pembayaran',
                    name: 'id_pembayaran'
                },
                {
                    data: 'id_pesanan',
                    name: 'id_pesanan'
                },
                {
                    data: 'nama_pemesan',
                    name: 'nama_pemesan'
                },
                {
                    data: 'harga',
                    name: 'harga'
                },
                {
                    data: 'status_pembayaran',
                    name: 'status_pembayaran'
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
                        return "<btn class='btn btn-primary editBtn' data-bs-toggle='modal' data-bs-target='#modalForm' data-bs-toggle='modal' attr-href='{!! url('/admin/daftarpembayaran/edit/"+row.id_pembayaran+"') !!}'><i class='bi bi-pencil'></i>Edit</btn>"

                    }
                }
            ]
        });

        /*
         *Tombol Edit Paket
         */
        $('.DataTable tbody').on('click', '.editBtn', function(event) {
            let modalForm = document.getElementById('modalForm');
            modalForm.addEventListener('shown.bs.modal', function(eventEdit) {
                eventEdit.preventDefault();
                eventEdit.stopImmediatePropagation();
                const link = eventEdit.relatedTarget.getAttribute('attr-href');

                axios.get(link).then(response => {
                    $('#modalForm .modal-body').html(response.data);
                    // $(".modal-title").html("Edit Data Barang Baru");
                });

                //simpan
                $('.btnSimpan').on('click', function(submitEvent) {
                    submitEvent.stopImmediatePropagation();
                    var data = {
                        'id_pembayaran': $('#id_pembayaran').val(),
                        'status_pembayaran': $('#status_pembayaran').val(),
                        '_token': "{{ csrf_token() }}"
                    }
                    if (data.id_pembayaran != '' && data.status_pembayaran != '') {
                        axios.post('{{ url('/admin/daftarpembayaran/update') }}', data).then(resp => {
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
