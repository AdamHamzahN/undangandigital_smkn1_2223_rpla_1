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

    <!-- bootstrap icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- <link rel="stylesheet" href="style.css" /> -->
    @vite(['resources/css/style.css'])
</head>

<body>

    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">

        <img src="{{ asset('img/pasangan.png') }}" alt="">

        <main class="content">

            <h3>The Wedding Of</h3>
            <h1>Adam & Hawa</h1>
            <h5>Kepada Yth :</h5>
            <div class="nama_tamu">
                <?php
                echo $_GET['tamu'];
                ?>
            </div>

            <p>Tanpa mengurangi rasa hormat,kami mengundang bapak/ibu/saudara/i/ untuk hadir diacara kami</p>
            <a href="#undangan" class="btn btn-lg mt-2"><i class="bi bi-envelope-open"></i>Buka Undangan</a>


        </main>
    </section>

    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1>Adam & Hawa</h1>
                    <h5>Sabtu, 04 April 2024</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="pasangan" class="pasangan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p>
                    "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                    pasangan-pasangan untukmu dari jenismu sendiri, agar kamu
                    cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di
                    antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu
                    benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
                    berpikir."
                    </p>
                    <h6>QS. Ar-Rum : 21</h6>
                    <p>______________________</p>
                </div>
            </div>

            <!-- foto pengantin -->
            <div class="row couple">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-8 text-end">
                            <h3>Adam</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, consequuntur!</p> -->
                            <p>Putra pertama dari Bpk.Suryo <br> dan <br> Ibu Ozawa</p>
                            <i class="bi bi-instagram"><a href="https://www.instagram.com/adam_m/?igsh=N3Rwa3Z3MWVyOHg3"> adam_m</a></i>
                        </div>

                        <div class="pria col-4">
                            <img
                            src="img/pria.png"
                            alt="Adam"
                            class="img-responsive rounded-circle"
                            />
                        </div>
                    </div>
                </div>

                <div class="wa col-lg-6">
                    <div class="row">
                        <div class=" wanita col-4">
                            <img
                            src="img/wanita.png"
                            alt="Hawa"
                            class="img-responsive rounded-circle"
                            />
                        </div>
                        <div class="col-8">
                            <h3>Hawa</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, consequuntur!</p> -->
                            <p>Putri kedua dari Bpk.Nugroho <br> dan <br> Ibu Maria</p>
                            <i class="bi bi-instagram"><a href="https://www.instagram.com/hawa123/?igsh=N3Rwa3Z3MWVyOHg3"> hawa123</a></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script> -->
</body>

</html>