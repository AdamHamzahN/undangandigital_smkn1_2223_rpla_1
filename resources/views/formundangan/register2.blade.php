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
                        <div class="col-lg-15 m-3 kalimat mx-auto">
                            <form action="{{ url('formundangan/register3') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="tanggal_akad" class="mb-3">Tanggal Akad :</label>
                                    <input type="text" name="tanggal_akad" id="tanggal_akad" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="mb-3">Alamat :</label><br>
                                    <input type="text" name="alamat" id="alamat" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="Map" class="mb-3">Map :</label><br>
                                <div class="form-group">
                                    <label for="tanggal_resepsi" class="mb-3">Tanggal Resepsi :</label>
                                    <input type="text" name="tanggal_resepsi" id="tanggal_resepsi" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="mb-3">Alamat :</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="map" class="mb-3">Map :</label><br>
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
