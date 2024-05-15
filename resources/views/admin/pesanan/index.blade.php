@extends('template.admin')
@section('title', 'pesanan')
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
                            <div class="col-sm">
                                <h4>Tabel Pesanan</h4>
                            </div>
                            {{-- <div class="col-sm text-end"> <button class="btn btn-success btnTambahPesanan"
                                    data-bs-target="#modalForm" data-bs-toggle="modal"
                                    attr-href={{ route('pesanan.tambah') }}><i class="bi bi-plus-lg"></i>Tambah</button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="DataTable table-hovered table-bordered table-striped table-responsive text-center">
                            <thead>
                                <tr class="text-center">
                                    <th>Id Pesanan</th>
                                    <th>Pemesan</th>
                                    <th>Paket</th>
                                    <th>Tema</th>
                                    <th>Id Undangan</th>
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

@endsection
@section('footer')
    <script type="module">
        //Judul Modal
        // const temaModal = document.querySelector('#modalForm');
        // const modal = bootstrap.Modal.getOrCreateInstance(temaModal);

        // function changeHTML(element, find, text) {
        //     $(element).find(find).html();
        //     return $(element).find(find).html(text).promise().done();
        // }


        // DataTable
        var table = $('.DataTable').DataTable({
            processing: true,
            responsive: true,
            ServerSide: true,
            ajax: "{!! route('pesanan.data') !!}",
            columns: [{
                    data: 'id_pesanan',
                    name: 'id_pesanan',
                },
                {
                    data: 'id_pesanan',
                    name: 'id_pesanan',
                    // render: function(data, type, row) {
                    //     return row.id_pesanan.nama_pemesan;
                    // }
                },
                {
                    data: 'id_pesanan',
                    name: 'id_pesanan',
                },
                {
                    data: 'id_pesanan',
                    name: 'id_pesanan',
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


                    // render: function(data, type, row) {
                    //     return "<btn class='btn btn-primary editBtn' data-bs-toggle='modal' data-bs-target='#modalForm' data-bs-toggle='modal' attr-href='{!! url('/admin/paket/edit/"+row.id_pesanan+"') !!}'><i class='bi bi-pencil'></i>Edit</btn><btn class='btn btn-danger btnHapusPaket' attr-id='" +
                    //         row.id_pesanan + "'><i class='bi bi-trash'></i>Hapus</btn>"
                    // }
                }
            ]
        });

        /**
         * Tombol Tambah Paket
         * 
         */
        // $('.btnTambahPaket').on('click', function(a) {
        //     changeHTML('#modalForm', '.modal-title', 'Tambah Paket');
        //     const modalForm = document.getElementById('modalForm');
        //     modalForm.addEventListener('shown.bs.modal', function(eventTambah) {
        //         eventTambah.preventDefault();
        //         eventTambah.stopImmediatePropagation();
        //         const link = eventTambah.relatedTarget.getAttribute('attr-href');
        //         // alert(link);
        //         //const modalData = document.querySelector('#modalForm .modal-body');
        //         // $(".modal-header .modal-title").html("Tambah data Barang Baru");
        //         axios.get(link).then(response => {
        //             $("#modalForm .modal-body").html(response.data);
        //         });
        //         //Contoh Ajax
        //         //
        //         // $.ajax(({
        //         //     url:link,
        //         //     method: 'GET',
        //         //     success: function(response){
        //         //         $('modalForm .modal-body').html('p');
        //         //     }
        //         //}))

        //         //simpan
        //         $('.btnSimpanPaket').on('click', function(submitEvent) {
        //             submitEvent.stopImmediatePropagation();
        //             var data = {
        //                 'nama_paket': $('#nama_paket').val(),
        //                 'detail_paket': $('#detail_paket').val(),
        //                 'harga': $('#harga').val(),
        //                 '_token': "{{ csrf_token() }}"
        //             }
        //             if (data.nama_paket != '' && data.detail_paket != '' && data.harga != '') {
        //                 axios.post('{{ url('/admin/paket/simpan') }}', data).then(resp => {
        //                     if (resp.data.status == 'success') {
        //                         //tampilkan pop up berhasil;
        //                         Swal.fire({
        //                             title: "berhasil!",
        //                             text: resp.data.pesan,
        //                             icon: "success"
        //                         }).then(() => {
        //                             //close modal
        //                             modal.hide();
        //                             //reload tabel
        //                             table.ajax.reload();

        //                         });
        //                     } else {
        //                         //tampilkan pop up gagal
        //                         Swal.fire({
        //                             title: "GAGAL",
        //                             text: resp.data.pesan,
        //                             icon: "error"
        //                         });
        //                     }
        //                 });
        //             } else {
        //                 alert('data tidak boleh kosong');
        //             }

        //         });
        //     });
        //     modalForm.addEventListener('hidden.bs.modal', function(closeEvent) {
        //         closeEvent.preventDefault();
        //         closeEvent.stopImmediatePropagation();

        //         $('#modalForm').removeData();
        //     });
        // });


        // /*
        //  *Tombol Edit Paket
        //  */
        // $('.DataTable tbody').on('click', '.editBtn', function(event) {
        //     changeHTML('#modalForm', '.modal-title', 'Ubah Paket');
        //     let modalForm = document.getElementById('modalForm');
        //     modalForm.addEventListener('shown.bs.modal', function(eventEdit) {
        //         eventEdit.preventDefault();
        //         eventEdit.stopImmediatePropagation();
        //         const link = eventEdit.relatedTarget.getAttribute('attr-href');

        //         axios.get(link).then(response => {
        //             $('#modalForm .modal-body').html(response.data);
        //             // $(".modal-title").html("Edit Data Barang Baru");
        //         });

        //         //simpan
        //         $('.btnSimpanPaket').on('click', function(submitEvent) {
        //             submitEvent.stopImmediatePropagation();
        //             var data = {
        //                 'id_paket': $('#id_paket').val(),
        //                 'nama_paket': $('#nama_paket').val(),
        //                 'detail_paket': $('#detail_paket').val(),
        //                 'harga': $('#harga').val(),
        //                 '_token': "{{ csrf_token() }}"
        //             }
        //             if (data.id_paket != '' && data.nama_paket != '' && data.detail_paket != '' &&
        //                 data.harga != '') {
        //                 axios.post('{{ url('/admin/paket/simpan') }}', data).then(resp => {
        //                     if (resp.data.status == 'success') {
        //                         //tampilkan pop up berhasil;
        //                         Swal.fire({
        //                             title: "berhasil!",
        //                             text: resp.data.pesan,
        //                             icon: "success"
        //                         }).then(() => {
        //                             //close modal
        //                             modal.hide();
        //                             //reload tabel
        //                             table.ajax.reload();

        //                         });
        //                     } else {
        //                         //tampilkan pop up gagal
        //                         Swal.fire({
        //                             title: "GAGAL",
        //                             text: resp.data.pesan,
        //                             icon: "error"
        //                         });
        //                     }
        //                 });
        //             } else {
        //                 alert('data tidak boleh kosong');
        //             }

        //         });
        //     });
        //     modalForm.addEventListener('hidden.bs.modal', function(closeEvent) {
        //         closeEvent.preventDefault();
        //         closeEvent.stopImmediatePropagation();

        //         $('#modalForm').removeData();
        //     });
        // });

        // /*
        //  *Tombol Hapus Tema
        //  */
        // $('.DataTable tbody').on('click', '.btnHapusPaket', function(eventHapus) {
        //     let id_paket = $(this).closest('.btnHapusPaket').attr('attr-id');
        //     Swal.fire({
        //         title: "Yakin Hapus data?",
        //         text: "Data Yang Sudah DiHapus Tidak Akan Bisa Kembali",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Setuju,Hapus Data"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             let hapusData = {
        //                 'id_paket': id_paket,
        //                 '_token': '{{ csrf_token() }}'
        //             };
        //             axios.post('{{ url('admin/paket/hapus') }}', hapusData).then(resp => {
        //                 if (resp.data.status == 'success') {
        //                     //tampilkan pop up berhasil;
        //                     Swal.fire({
        //                         title: "berhasil!",
        //                         text: resp.data.pesan,
        //                         icon: "success"
        //                     }).then(() => {
        //                         //close modal
        //                         modal.hide();
        //                         //reload tabel
        //                         table.ajax.reload();

        //                     });
        //                 } else {
        //                     //tampilkan pop up gagal
        //                     Swal.fire({
        //                         title: "GAGAL",
        //                         text: resp.data.pesan,
        //                         icon: "error"
        //                     });
        //                 }
        //             });
        //         } else {
        //             alert('data tidak boleh kosong');
        //         }
        //     })
        //     // Swal.fire({
        //     //     title: "Deleted!",
        //     //     text: "Your file has been deleted.",
        //     //     icon: "success"
        //     // });
        // });
    </script>
@endsection
