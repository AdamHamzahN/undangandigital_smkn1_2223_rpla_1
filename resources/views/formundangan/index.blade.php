<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Undangan</title>
    @vite(['resources/css/formundangan.css'])
</head>

<body class="formundangan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto parent">
                <div class="col-lg-6 mx-auto formundangan-card">
                    <div class="card mx-auto display-flex "> <!-- Add mt-5 class for top margin -->
                        <div class="card-header card-header text-center bg">
                            <h1 class="text-black text-formundangan">Nikah Yuk</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('formundangan/register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_admin" class="mb-3">Nama Pemesan :</label>
                                    <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control formundangan-input" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-3">Kontak Pemesan (Whatsapp) :</label><br>
                                    <input type="text" name="kontak_pemesan" id="kontak_pemesan" class="form-control formundangan-input" required><br>
                                </div>
                                <button class="btn btn-primary btn-block ml-11 text-black ">NEXT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
