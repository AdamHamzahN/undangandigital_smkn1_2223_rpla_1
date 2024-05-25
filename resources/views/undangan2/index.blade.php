    {{-- Cuma Uji Coba (Kalo mau ikutin ya GPP,Saran Gw sih Ikutin aja) --}}

    <?php
    //detail pengantin
    $pengantin_laki = 'Adam';
    $pengantin_perempuan = 'Hawa';
    $nama_lengkap_laki = 'Adam Manusia Pertama';
    $nama_lengkap_perempuan = 'Hawa Perempuan Pertama';
    
    //keterangan anak ke-
    $keterangan_pengantin_laki = 'Putra Pertama';
    $keterangan_pengantin_perempuan = 'Putri kedua';
    
    //orangtua pengantin
    $ayah_laki = 'Egi';
    $ayah_perempuan = 'suharno';
    $ibu_laki = 'dewi';
    $ibu_perempuan = 'maria';
    
    //instagram pengantin
    $link_instagram_laki = 'https://www.instagram.com/hawa123/?igsh=N3Rwa3Z3MWVyOHg3';
    $username_ig_laki = 'adam_ganteng123';
    $link_instagram_perempuan = 'https://www.instagram.com/hawa123/?igsh=N3Rwa3Z3MWVyOHg3';
    $username_ig_perempuan = 'hawa_cantik123';
    
    //keterangan Acara
    //akad
    $tanggal_akad = 'Sabtu, 04 April 2024';
    $jam_akad = '09.00 - 10.00 WIB';
    $tempat_akad = 'Aula Gedung Sate jl. Hayam Wuruk No.16';
    $link_map_akad = 'https://www.google.com/maps/place/Gedung+Sate/@-6.9024715,107.6187018,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e64c5e8866e5:0x37be7ac9d575f7ed!8m2!3d-6.9024715!4d107.6187018!16zL20vMGRqOXg3?entry=ttu';
    
    //resepsi
    $tanggal_resepsi = 'Sabtu, 04 April 2024';
    $jam_resepsi = '09.00 - 10.00 WIB';
    $tempat_resepsi = 'Aula Gedung Sate jl. Hayam Wuruk No.16';
    $link_map_resepsi = 'https://www.google.com/maps/place/Gedung+Sate/@-6.9024715,107.6187018,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e64c5e8866e5:0x37be7ac9d575f7ed!8m2!3d-6.9024715!4d107.6187018!16zL20vMGRqOXg3?entry=ttu';
    
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Undangan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

        <!-- Font Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet" />

        <!-- bootstrap icons -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



        <!-- <link rel="stylesheet" href="style.css" /> -->
        @vite(['resources/css/style.css', 'resources/js/app.js'])
        <style>
            body {
                scroll-behavior: smooth;

            }

            /* .hero {
                color: rgba(165, 125, 23, 1);
            } */

            /* .hero a:hover {
                background-color: rgba(165, 125, 23, 1);
                color: white;
            } */

            .navbar-light {
                display: none;
                /* Sembunyikan navigasi secara default */
            }

            .navbar-light.show-nav {
                display: block;
            }

            body.no-scroll {
                overflow: hidden;
            }
        </style>
    </head>

    <body>
        <nav class="fixed-bottom navbar-light bg-light rounded-pill p-1 m-3">
            <ul class="nav navbar-nav w-100 flex-row justify-content-evenly">
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#hero">
                        <h3><i class="bi bi-house"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#pasangan">
                        <h3><i class="bi bi-heart"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#acara">
                        <h3><i class="bi bi-calendar-heart"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#foto">
                        <h3><i class="bi bi-card-image"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10  p-1"> <a class="nav-link" href="#kartu_ucapan">
                        <h3><i class="bi bi-chat-left-dots"></i></h3>
                    </a>
                </li>
            </ul>
        </nav>


        <section id="hero"
            class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">

            <img src="{{ asset('img/pasangan.png') }}" alt="pasangan">

            <main class="content">
                <h3>The Wedding Of</h3>
                <h1>{{ $pengantin_laki }} & {{ $pengantin_perempuan }}</h1>
                <h5>Kepada Yth :</h5>
                <div class="nama_tamu">
                    <?php
                    echo $_GET['tamu'];
                    ?>
                </div>

                <p>Tanpa mengurangi rasa hormat,kami mengundang bapak/ibu/saudara/i/ untuk hadir diacara kami</p>
                <a href="#home" class="btn btn-lg mt-2"><i class="bi bi-envelope-open"></i>Buka Undangan</a>


            </main>
        </section>

        <section id="home" class="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1><?= $pengantin_laki ?> & <?= $pengantin_perempuan ?></h1>
                        <h5><?= $tanggal_resepsi ?></h5>
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
                                <i class="bi bi-instagram"><a
                                        href="https://www.instagram.com/adam_m/?igsh=N3Rwa3Z3MWVyOHg3">
                                        adam_m</a></i>
                            </div>

                            <div class="pria col-4">
                                <img src="img/pria.png" alt="Adam" class="img-responsive rounded-circle" />
                            </div>
                        </div>
                    </div>

                    <div class="wa col-lg-6">
                        <div class="row">
                            <div class=" wanita col-4">
                                <img src="img/wanita.png" alt="Hawa" class="img-responsive rounded-circle" />
                            </div>
                            <div class="col-8">
                                <h3>Hawa</h3>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, consequuntur!</p> -->
                                <p>Putri kedua dari Bpk.Nugroho <br> dan <br> Ibu Maria</p>
                                <i class="bi bi-instagram"><a
                                        href="https://www.instagram.com/hawa123/?igsh=N3Rwa3Z3MWVyOHg3">
                                        hawa123</a></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="acara" id="acara">
            <div class="container">
                <div class="text-center">
                    <div class="row justify-content-center">
                        <h1>Akad Nikah</h1>
                    </div>
                    <div class="row akad m-2">
                        <div class="text-center">
                            <h6 class="text-center">{{ $tanggal_akad }}</h6>
                            <h6>{{ $jam_akad }}</h6>
                            <h6>Bertempatan di {{ $tempat_akad }}</h6>
                            <a href="{{ $link_map_akad }}">
                                <button class="btn btn-warning"><i class="bi bi-geo-alt-fill"></i>Buka Maps</button>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <h1>Resepsi</h1>
                    </div>
                    <div class="row resepsi text-center m-2">
                        <div class="text-center">
                            <h6>{{ $tanggal_resepsi }}</h6>
                            <h6>{{ $jam_resepsi }}</h6>
                            <h6>Bertempatan di {{ $tempat_resepsi }}</h6>
                            <a href="{{ $link_map_resepsi }}">
                                <button class="btn btn-warning"><i class="bi bi-geo-alt-fill"></i>Buka Maps</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        {{-- Kartu Ucapan --}}
        <section class="kartu_ucapan" id="kartu_ucapan">
            <div class="p-3">
                <h1 class="text-center">Kartu Ucapan</h1>
                <input type="hidden" id="id_undangan" name="id_undangan" value="{{ $id_undangans }}">
                <label for="nama">Nama</label>
                <input type="text" class="nama form-control" id="nama" name="nama" required>

                <label for="ucapan">Kirim Ucapan</label>
                <input type="text" class="ucapan form-control" id="ucapan" name="ucapan" required>

                <button class="btn btn-warning btnKirimUcapan m-2">Kirim Ucapan</button>

                <h2>Ucapan Dari Yang Lain</h2>
                <div class="kartu-ucapan ">
                    @foreach ($ucapans as $ucapan)
                        @if ($ucapan == null)
                            <div class="ucapan">Belum Ada Ucapan Dari Yang Lain</div>
                        @else
                            <div class="ucapan bg-light border border-warning rounded m-1 p-2">
                                <h4>Dari <span class="text-primary"></span>{{ $ucapan->nama }}</h4>
                                <h4>{{ $ucapan->ucapan }}</h4>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script> -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const bukaUndanganButton = document.querySelector('.btn-lg');
                const nav = document.querySelector('.navbar-light');
                bukaUndanganButton.addEventListener('click', function() {
                    document.body.classList.remove('no-scroll');
                    nav.classList.add('show-nav');
                });

                // Cegah scroll saat halaman dimuat (sebelum tombol ditekan)
                document.body.classList.add('no-scroll');
            });

            var ucapan = document.querySelector('.kartu-ucapan');

            $('.btnKirimUcapan').on('click', function(submitEvent) {
                submitEvent.stopImmediatePropagation();
                var data = {
                    'id_undangan': $('#id_undangan').val(),
                    'nama': $('#nama').val(),
                    'ucapan': $('#ucapan').val(),
                    '_token': "{{ csrf_token() }}"
                }
                if (data.nama != '' && data.ucapan != '') {
                    axios.post('{{ url('/undangan/kirimucapan') }}', data).then(resp => {
                        if (resp.data.status == 'success') {
                            //tampilkan pop up berhasil;
                            Swal.fire({
                                title: "berhasil!",
                                text: resp.data.pesan,
                                icon: "success"
                            }).then(() => {
                                //reload tabel
                                $('.kartu-ucapan').append('<div class="ucapan"><h6>' + data.nama +
                                    '</h6><h6>' + data.ucapan + '</h6></div>');

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
        </script>

    </body>


    </html>
