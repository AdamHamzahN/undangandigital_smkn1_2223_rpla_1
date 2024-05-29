@extends('template.admin')
@section('title', 'pesanan')
@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="header">
                <h1><b>Pesanan</b></h1>
            </div>
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm">
                                <h4>Tabel Pesanan</h4>
                            </div>
                            <div class="col-sm text-end"> <a href="/admin/pesanan/tambahpemesan"><button
                                        class="btn btn-success btnTambahPesanan"><i
                                            class="bi bi-plus-lg"></i>Tambah</button>
                                </a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="DataTable table-hovered table-bordered table-striped table-responsive text-center">
                            <thead>
                                <tr class="text-center">
                                    <th>Nomor Pesanan</th>
                                    <th>Id Undangan</th>
                                    <th>Pemesan</th>
                                    <th>Kontak Pemesan</th>
                                    <th>Paket</th>
                                    <th>Tema</th>
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
                    <h3 class="modal-title text-center text-light">Edit Tema / Paket Pesanan</h3>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body ">

                </div>
                <div class="modal-footer bg-body">

                    <button class="btn btn-success btnSimpan"><i class="bi bi-save"></i>Simpan</button>
                    <button class="btn btn-primary " data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
            <a href="/pesanan/detailundangan/{}"></a><button class="btn btn-info"></button>
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
            Responsive: true,
            ServerSide: true,
            ajax: "{!! route('pesanan.data') !!}",
            columns: [{
                    data: 'id_pesanan',
                    name: 'id_pesanan',
                },
                {
                    render: function(data, type, row) {
                        return row.undangan.id_undangan;
                    }

                },
                {
                    render: function(data, type, row) {
                        return row.pemesan.nama_pemesan;
                    }

                },
                {
                    render: function(data, type, row) {
                        return row.pemesan.kontak;
                    }
                },
                {
                    render: function(data, type, row) {
                        return row.paket.nama_paket;
                    }

                },
                {
                    render: function(data, type, row) {
                        return row.tema.nama_tema;
                    }
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
                        return "<button class='btn btn-primary editBtn' data-bs-toggle='modal' data-bs-target='#modalForm' attr-href='{!! url('/admin/pesanan/edit/"+row.id_pesanan+"') !!}'> <i class='bi bi-pencil'></i></button> <button class='btn btn-danger btnHapusPesanan' attr-id='" +
                            row.id_pesanan + "' attr-undangan='" + row.id_undangan +
                            "'><i class='bi bi-trash'></i></button>" +
                            " <button class='btn btn-info btnDetailUndangan' attr-id='" +
                            row.id_undangan + "'><i class='bi bi-search'></i>   </button>";
                    }


                }
            ]
        });

        $('.DataTable tbody').on('click', '.btnHapusPesanan', function(eventHapus) {
            let id_pesanan = $(this).closest('.btnHapusPesanan').attr('attr-id');
            let id_undangan = $(this).closest('.btnHapusPesanan').attr('attr-undangan');

            Swal.fire({
                title: "Yakin Hapus data?",
                text: "Data Yang Sudah DiHapus Tidak Akan Bisa Kembali",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Setuju,Hapus Data"
            }).then((result) => {
                if (result.isConfirmed) {
                    let hapusData = {
                        'id_pesanan': id_pesanan,
                        'id_undangan': id_undangan,
                        '_token': '{{ csrf_token() }}'
                    };
                    axios.post('{{ url('admin/pesanan/hapus') }}', hapusData).then(resp => {
                        if (resp.data.status == 'success') {
                            //tampilkan pop up berhasil;
                            Swal.fire({
                                title: "berhasil!",
                                text: resp.data.pesan,
                                icon: "success"
                            }).then(() => {
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
            })
        });

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
                        'id_pesanan': $('#id_pesanan').val(),
                        'id_tema': $('#id_tema').val(),
                        'id_paket': $('#id_paket').val(),
                        '_token': "{{ csrf_token() }}"
                    }
                    if (data.id_pesanan != '' && data.id_tema !== '' && data.id_paket !== '') {
                        axios.post('{{ url('/admin/pesanan/update') }}', data).then(resp => {
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

        $('.DataTable tbody').on('click', '.btnDetailUndangan', function(event) {
            event.preventDefault();
            let id_undangan = $(this).closest('.btnDetailUndangan').attr('attr-id');
            window.location.href = '{{ url('/admin/pesanan/detailundangan/') }}' + '/' + id_undangan;
        });
    </script>
@endsection
