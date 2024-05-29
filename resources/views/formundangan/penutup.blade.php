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
                    <div class=" mx-auto display-flex mt-5"> <!-- Add mt-5 class for top margin -->
                        <div class=" text-center bg">
                            <h1 class="text-black text-formundangan">NIKAHYUK</h1>
                        </div>
                        <br>
                        <div class="col-lg-15 m-3 kalimat mx-auto ">
                            <form action="{{ url('formundangan/register') }}" method="post">
                                @csrf
                            <h6>Terima kasih sudah memesan di NIKAH YUK</h6>
                            <h6>Silahkan tunggu pesanan hingga selesai</h6>
                            <h6>Pesanan akan dikirimkan memalui Whatsapp</h6>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
