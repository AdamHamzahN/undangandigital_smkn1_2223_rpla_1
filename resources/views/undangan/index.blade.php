<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Undangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="style.css" /> -->
    @vite(['resources/css/style.css'])
</head>

<body>
    <img src="{{ asset('img/pasangan.png') }}" alt="">

    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">
        <main>
            <h5>Kepada Yth:</h5>
            <div class="nama_tamu">
                <?php
                echo $_GET['tamu'];
                ?>
            </div>
            <!-- <br> -->
            <h1>Adam & Hawa</h1>
            <br>
            <p>Tanpa mengurangi rasa hormat,kami mengundang bapak/ibu/saudara/i/ untuk hadir diacara kami</p>
            <a href="#undangan" class="btn btn-lg mt-2">Buka Undangan</a>
        </main>
    </section>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script> -->
</body>

</html>