<?php include 'koneksi.php' ?>

<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi Kami</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css" />

    <!-- CSS AoS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gelasio:ital@1&family=Raleway:wght@600&family=Viga&display=swap"
        rel="stylesheet">

    <!-- CSS Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Maps -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/css/ol.css" type="text/css">
</head>

<body>
    <!-- Scroll to Top -->
    <div className="scroll-to-top">
        <span class="btn btn-position btn-style">^</i>
    </div>
    <!-- Akhir Scroll to Top -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-pertama bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Toko 88</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto ml-auto">
                    <a class="nav-item nav-link" aria-current="page" href="../index.php">Beranda</a>
                    <a class="nav-item nav-link" href="profil.php">Profil</a>
                    <a class="nav-item nav-link" href="katalog.php">Katalog Produk</a>
                    <a class="nav-item nav-link active" href="#">Hubungi Kami</a>
                </div>
                <div class="navbar-nav mx-0 ml-auto">
                    <a class="nav-item btn btn-info tombol" href="login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Container Contact -->
    <section class="sect-form" id="contact-form">
        <div class="container-content col-md-6 mx-auto">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6" style="width: 100%">
                    <div class="alert alert-success alert-dismissible fade show d-none msg-alert" role="alert">
                        <strong>Pesan Anda sudah terkirim!</strong> Mohon menunggu balasan dari pihak kami.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="contact-web-toko-88">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                                placeholder="Input Nama Lengkap" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email"
                                placeholder="Input email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="4" name="pesan" required
                                placeholder="Ketikkan pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info btn-kirim">Kirim</button>
                        <button class="btn btn-success btn-loading d-none" type="button" disabled>
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" width="100%">
            <path fill="#7a86b6" fill-opacity="1"
                d="M0,256L48,240C96,224,192,192,288,165.3C384,139,480,117,576,122.7C672,128,768,160,864,186.7C960,213,1056,235,1152,245.3C1248,256,1344,256,1392,256L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>


    <section class="sect-maps" id="cont-maps">
        <div id="map" class="map container-maps col-md-10 mx-auto">
            <h4>Alamat Kami</h4>
            <a
                href="https://www.google.com/maps/place/Toko+88/@0.0638797,109.2001562,17z/data=!3m1!4b1!4m5!3m4!1s0x31e2a1f035afd33d:0xc18a8bd8d74c2e40!8m2!3d0.0638433!4d109.2023201">Lihat
                di Google Maps</a>
        </div>
    </section>
    <!-- Akhir Container Contact -->

    <!-- Container Footer -->
    <footer class="sect-foot text-center">
        <p>2022 All Rights Reserved by Darmadi Andrew Fernando</p>
    </footer>
    <!-- Akhir Container Footer -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Script JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Script Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 3500,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    })
    </script>

    <!-- Script Scroll to Top -->
    <script>
    const scrollBtn = document.querySelector(".btn");
    const btnVisibility = () => {
        if (window.scrollY > 200) {
            scrollBtn.style.visibility = "visible";
        } else {
            scrollBtn.style.visibility = "hidden";
        }
    };
    document.addEventListener("scroll", () => {
        btnVisibility();
    });
    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
    </script>

    <!-- Maps -->
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js">
    </script>
    <script type="text/javascript">
    var map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([109.20235562592812, 0.06407814771437549]),
            zoom: 16
        })
    });
    </script>

    <!-- Contact Form to Google Sheets -->
    <script>
    const scriptURL =
        'https://script.google.com/macros/s/AKfycbwUqGc5BiUdnOY7KLaD_f7hNFNhMfvcXILA3kFmcFuBlRMRw0cgy8mOqzkgZ_TQbA1M/exec'
    const form = document.forms['contact-web-toko-88']
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const msgAlert = document.querySelector('.msg-alert');

    form.addEventListener('submit', e => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan tombol loading dan hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
            })
            .then(response => {
                // tampilkan tombol kirim dan hilangkan tombol loading
                btnLoading.classList.toggle('d-none');
                btnKirim.classList.toggle('d-none');
                // tampilkan message alert
                msgAlert.classList.toggle('d-none');
                // reset form (kosongkan isi form)
                form.reset();
                console.log('Success!', response)
            })
            .catch(error => console.error('Error!', error.message))
    })
    </script>

</body>

</html>