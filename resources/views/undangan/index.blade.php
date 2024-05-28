<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0" />
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

    <!-- simply countdown -->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css"/>
    <script src="countdown/simplyCountdown.min.js"></script>

    <!-- <link rel="stylesheet" href="style.css" /> -->
    @vite(['resources/css/style.css','resources/js/app.js'])
</head>

<body>

        <nav class="fixed-bottom navbar-light bg-light rounded-pill p-1 m-3">
            <ul class="nav navbar-nav w-100 flex-row justify-content-evenly">
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#home">
                        <h3><i class="bi bi-house-door"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#pasangan">
                        <h3><i class="bi bi-heart"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#info">
                        <h3><i class="bi bi-calendar-heart"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10 px-1"> <a class="nav-link" href="#gallery">
                        <h3><i class="bi bi-card-image"></i></h3>
                    </a>
                </li>
                <li class="nav-item w-10  px-1"> <a class="nav-link" href="#kartu_ucapan">
                        <h3><i class="bi bi-chat-left-dots"></i></h3>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- tampilan awal / ke1 -->
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">

        <!-- <img src="{{ asset('assets/pasangan.png') }}" alt=""> -->

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
            <a href="#home" class="btn btn-lg mt-2"><i class="bi bi-envelope-open"></i>Buka Undangan</a>
            <!-- <a href="#home" class="btn btn-lg mt-3 bi bi-envelope-open"
            onClick="enableScroll()"> Buka Undangan</a> -->

        </main>
    </section>

    <!-- tampilan ke2 -->
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

    <!-- passangan / tampilan ke3 -->
    <section id="pasangan" class="pasangan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
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
                            src="{{ asset('assets/pria.png') }}"
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
                            src="{{ asset('assets/wanita.png') }}"
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

    <!-- save the date / tampilan ke 4-->
    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Save The Date</h2>
                    
                </div>
            </div>

            <div class="row justify-content-center mt-4">
            <!-- Akad -->
            <div class="col-md-5 col-10">
                <div class="card text-center text-bg-light mb-5">
                <div class="card-header">
                    Akad Nikah
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                    <div class="col-md-6">
                        <i class="bi bi-clock d-block"></i>
                        <span>09.00 - 10.00</span>
                    </div>
                    <div class="col-md-6">
                        <i class="bi bi-calendar2 d-block"></i>
                        <span>Sabtu, 04 April 2024</span>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    Alamat: Jl. Hayam Wuruk No.16, Citarum,
                    Kec. Bandung Wetan, Kota Bandung
                    <br>
                    <a href="https://maps.app.goo.gl/hnxbWCHnJVpfg1cz6" target="_blank" class="btn btn-light 
                    btn-sm my-4"><i class="bi bi-geo-alt-fill"></i> Klik untuk membuka peta</a>
                </div>
                </div>
            </div>

            <!-- resepsi -->
            <div class="col-md-5 col-10">
                <div class="card text-center text-bg-light">
                <div class="card-header">
                    Resepsi
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                    <div class="col-md-6">
                        <i class="bi bi-clock d-block"></i>
                        <span>11.00 - selesai</span>
                    </div>
                    <div class="col-md-6">
                        <i class="bi bi-calendar2 d-block"></i>
                        <span>Sabtu, 04 April 2024</span>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    Alamat: Jl. Hayam Wuruk No.16, Citarum,
                    Kec. Bandung Wetan, Kota Bandung
                    <br>
                    <a href="https://maps.app.goo.gl/hnxbWCHnJVpfg1cz6" target="_blank" class="btn btn-light 
                    btn-sm my-4"><i class="bi bi-geo-alt-fill"></i>Klik untuk membuka peta</a>
                </div>
                </div>
            </div>
            </div>

            <div class="simply-countdown"></div>

        </div>
    </section>

    <!-- Wedding gallery / tampilan ke5 -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Wedding Gallery</h2>
                </div>
            </div>

            <div class="row  row-cols-md-4 row-cols-sm-3 row-cols-2
                justify-content-center">
                <div class="col mt-3">
                    <a href="{{ asset('assets/1.png') }}" data-toggle="lightbox" data-gallery="mygallery">
                    <img src="{{ asset('assets/1thumbnail.png') }}" alt="Adam & Hawa 1" class="img-fluid
                    w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/13/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                    <img src="https://picsum.photos/id/13/300/400" alt="Adam & Hawa 2" class="img-fluid
                    w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/14/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                    <img src="https://picsum.photos/id/14/300/400" alt="Adam & Hawa 3" class="img-fluid
                    w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/123/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                    <img src="https://picsum.photos/id/123/300/400" alt="Adam & Hawa 4" class="img-fluid
                    w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/133/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                    <img src="https://picsum.photos/id/133/300/400" alt="Adam & Hawa 5" class="img-fluid
                    w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="https://picsum.photos/id/305/1200/768" data-toggle="lightbox" data-gallery="mygallery">
                    <img src="https://picsum.photos/id/305/300/400" alt="Adam & Hawa 6" class="img-fluid
                    w-100 rounded">
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- kartu ucapan tampilan ke 6 -->
    <section id="kartu_ucapan" class="kartu_ucapan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Kartu Ucapan</h2>
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
            </div>
        </div>
    </section>

    <!-- <div class="audio-container">
        <audio id="song" autoplay loop>
            <source src="audio/loves-serenade-188266.mp3" type="audio/mp3">
        </audio>

        <div class="audio-icon-wrapper" style="display: none;">
            <i class="bi bi-disc"></i>
        </div>
    </div> -->

<!--  Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script>


    <!-- Lightbox for Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js">
    </script>

    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 12, // required
            day: 4, // required
            hours: 8, // Default is 0 [0-23] integer
            words: { //words displayed into the countdown
                days: { singular: 'hari', plural: 'hari' },
                hours: { singular: 'jam', plural: 'jam' },
                minutes: { singular: 'menit', plural: 'menit' },
                seconds: { singular: 'detik', plural: 'detik' }
            },
        });
    </script>


    <!-- <script>
        const rootElement = document.querySelector(":root");
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');
        const song = document.querySelector('#song');
        let isPlaying = false;

        

        function disableScroll() {
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onscroll = function() {
            window.scrollTo(scrollTop, scrollLeft);
            }

            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll() {
            window.onscroll = function () { }
            rootElement.style.scrollBehavior = 'smooth';
            // localStorage.setItem('opened', 'true');
            playAudio();
        }

        function playAudio(){
            // song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function() {
            if(isPlaying) {
            song.pause();
            audioIcon.classList.remove('bi-disc');
            audioIcon.classList.add('bi-pause-circle');
            } else{
            song.play();
            audioIcon.classList.add('bi-disc');
            audioIcon.classList.remove('bi-pause-circle');
            }

            isPlaying = !isPlaying;
        }

        // if (!localStorage.getItem('opened')){
            
        // }
        disableScroll();
        
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
                    axios.post('{{ url("/undangan/kirimucapan") }}', data).then(resp => {
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