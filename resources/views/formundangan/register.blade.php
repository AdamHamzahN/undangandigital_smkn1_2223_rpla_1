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
                <div class="col-lg-6 mx-auto">
                    <div class="mx-auto display-flex mt-5 mb-5"> <!-- Add mt-5 class for top margin -->
                        <div class="text-center bg">
                            <h1 class="text-black text-formundangan">NIKAH YUK</h1>
                        </div>
                        <br>
                        <div class="col-lg-15 m-3 kalimat mx-auto ">
                            <form action="{{ url('/formundangan/simpanpengantin') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_admin" class="mb-3">Nama Pengantin Pria :</label>
                                    <input type="text" name="nama_pengantin_pria" id="nama_pengantin_pria" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Nama Pengantin Wanita :</label><br>
                                    <input type="text" name="nama_pengantin_wanita" id="nama_pengantin_wanita" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Nama Panggilan Pria :</label><br>
                                    <input type="text" name="nama_panggilan_pria" id="nama_panggilan_pria" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Nama Panggilan Wanita :</label><br>
                                    <input type="text" name="nama_panggilan_wanita" id="nama_panggilan_wanita" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Nama Ayah Pria :</label><br>
                                    <input type="text" name="nama_ayah_pria" id="nama_ayah_pria" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Nama Ayah Wanita :</label><br>
                                    <input type="text" name="nama_ayah_wanita" id="nama_ayah_wanita" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Nama Ibu Pria :</label><br>
                                    <input type="text" name="nama_ibu_pria" id="nama_ibu_pria" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Nama Ibu Wanita :</label><br>
                                    <input type="text" name="nama_ibu_wanita" id="nama_ibu_wanita" class="form-control formundangan-input" required><br>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block ml-11 text-black ">NEXT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
