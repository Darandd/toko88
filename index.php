<?php
include 'other-files/koneksi.php'; ?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko 88</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

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
</head>

<body>
    <!-- Scroll to Top -->
    <div className="scroll-to-top">
        <span class="btn btn-position btn-style">^</i>
    </div>
    <!-- Akhir Scroll to Top -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Toko 88</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto ml-auto">
                    <a class="nav-item nav-link active" aria-current="page" href="#">Beranda</a>
                    <a class="nav-item nav-link" href="other-files/profile.php">Profil</a>
                    <a class="nav-item nav-link" href="other-files/katalog.php">Katalog Produk</a>
                    <a class="nav-item nav-link" href="other-files/contact.php">Hubungi Kami</a>
                </div>
                <div class=" mx-0 ml-auto">
                    <a class="nav-item btn btn-info tombol" href="other-files/login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron-fluid jumbotron text-center justify-content-center" id="Home">
        <div class="container">
            <div class="jumbo-text">
                <h1 class="display-4">E-Katalog <span>Toko 88</span></h1>
            </div>
        </div>
    </section>

    <!-- Container Info-->
    <div class="container">
        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-lg-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="img/icon-kualitas.png" alt="Produk Berkualitas" class="float-start">
                        <h4>Berkualitas</h4>
                        <p>Barang-barang yang dijual berkualitas tinggi.</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/icon-harga.png" alt="Harga Terjangkau" class="float-start">
                        <h4>Terjangkau</h4>
                        <p>Harga ramah di kantong dan tidak membuat dompet menipis.</p>
                    </div>
                    <div class="col-lg">
                        <img src="img/icon-lengkap.png" alt="Produk Lengkap" class="float-start">
                        <h4>Lengkap</h4>
                        <p>Menjual hampir semua produk kebutuhan sehari-hari.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Info Panel -->

        <!-- Info sekilas toko -->
        <div class="row shopspace">
            <div class="col-lg-6">
                <img src="img/bg-head.jpg" alt="Toko" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h3><span>Lebih Baik</span> Dari Yang <span>Terbaik</span></h3>
                <p>Kami selalu berusaha untuk memberikan pelayanan dan kualitas produk terbaik dibanding usaha sejenis
                    lainnya.</p>
                <a href="#" class="btn btn-warning tombol">Tentang Kami</a>
            </div>

        </div>
        <!-- Akhir info sekilas toko -->

        <!-- Testimonial -->
        <div class="owl-carousel owl-theme testimonial">
            <div class="item">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-8">
                        <q>Produk lengkap dan pelayanan ramah.</q>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 justify-content-center d-flex">
                        <figure class="figure text-center justify-content-center">
                            <img src="img/user-male.png" class="figure-img img-fluid rounded" alt="Testimonial 1">
                            <figcaption class="figure-caption">
                                <h5>Darmadi Andrew Fernando</h5>
                                <p>Pelanggan</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-8">
                        <q>Sembako murah.</q>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 justify-content-center d-flex">
                        <figure class="figure text-center justify-content-center">
                            <img src="img/user-male.png" class="figure-img img-fluid rounded" alt="Testimonial 2">
                            <figcaption class="figure-caption">
                                <h5>Irwan Sukandar</h5>
                                <p>Pembeli</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-8">
                        <q>Menjual berbagai macam barang kebutuhan pokok.</q>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-6 justify-content-center d-flex">
                        <figure class="figure text-center justify-content-center">
                            <img src="img/user-female.png" class="figure-img img-fluid rounded" alt="Testimonial 3">
                            <figcaption class="figure-caption">
                                <h5>Veronica Kristina</h5>
                                <p>Pelanggan</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Testimonial -->

        <!-- Footer -->
        <div class="row footer">
            <div class="col text-center">
                <p>2022 All Rights Reserved by Darmadi Andrew Fernando</p>
            </div>
        </div>
        <!-- Akhir Footer -->

    </div>
    <!-- Akhir Container Info -->

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
</body>

</html>