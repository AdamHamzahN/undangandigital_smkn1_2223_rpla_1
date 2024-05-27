<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monofett&display=swap" rel="stylesheet">
    <title>Form Undangan</title>
    @vite(['resources/css/formundangan.css'])
</head>

<body class="formundangan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto parent">
                <div class="col-lg-6 mx-auto formundangan-card mt-5 mb-5">
                    <div class="card mx-auto display-flex "> <!-- Add mt-5 class for top margin -->
                        <div class="card-header card-header text-center bg">
                            <a href="/formundangan/register3">BACK</a>
                            <h1 class="text-black text-formundangan">NIKAH YUK</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('formundangan/tamu') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_admin" class="mb-3">Nama Pemesan :</label><br>
                                    <label for="password" class="mb-3">Kontak Pemesan :</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Pengantin Pria :</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Pengantin Wanita :</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Panggilan Pria :</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Panggilan Wanita :</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Ayah Pria :</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Ibu Pria :</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Ayah Wanita:</label><br>
                                    <label for="nama_admin" class="mb-3">Nama Ibu Wanita :</label><br>
                                    <label for="nama_admin" class="mb-3">Tanggal Akad :</label><br>
                                    <label for="nama_admin" class="mb-3">Alamat :</label><br>
                                    <label for="nama_admin" class="mb-3">Map :</label><br>
                                    <label for="nama_admin" class="mb-3">Tanggal Resepsi :</label><br>
                                    <label for="nama_admin" class="mb-3">Alamat :</label><br>
                                    <label for="nama_admin" class="mb-3">Map :</label><br>
                                    <label for="nama_admin" class="mb-3">Tema :</label><br>
                                    <label for="nama_admin" class="mb-3">Paket :</label><br>
                                <button class="btn btn-primary btn-block ml-11 text-black ">NEXT</button>
                                <button class="btn btn-primary btn-block ml-11 text-black ">BACK</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
