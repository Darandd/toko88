<?php
include 'koneksi.php'; ?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

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
</head>

<body class="body-login" id="login">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase text-center text-white">
                                Masuk
                            </h2>
                            <p class="text-white-50 mb-5 text-center">Tolong masukkan username dan password Anda!</p>
                            <form class="align-items-flex-start" method="POST">
                                <div class="form-outline form-white mb-3">
                                    <input type="text" class="form-control" id="InputUsername"
                                        aria-describedby="UsernameHelp" placeholder="Username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="InputPassword"
                                        placeholder="Password" name="password" required>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"
                                        onclick="toggPass"></span>
                                </div>
                                <button type="submit" class="btn btn-warning" name="btn-login">Masuk</button>
                            </form>
                        </div>
                        <a href="../index.php" class="login-back"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Jika tombol login ditekan -->
    <?php
    if (isset($_POST['btn-login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // cek akun di database
        $ambil = $koneksi->query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
        $akunadminvalid = $ambil->num_rows;

        // jika akun ada
        if ($akunadminvalid == 1) {
            $admin = $ambil->fetch_assoc();
            // simpan session
            $_SESSION['admin'] = $admin;
            $message = 'Login sukses! Selamat Datang!';
            echo "<script>alert('$message');</script>";
            echo "<script>location='../index.php';</script>";
        } else {
            // jika gagal login
            echo "<script>alert('Login gagal! Mohon periksa ulang username dan password Anda!');</script>";
            echo "<script>location='login.php';</script>";
        }
    }
    ?>

    <!-- Script Tampilkan Password -->
    <script>
    $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");

        var input = $("#InputPassword");
        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    });
    </script>

    <!-- Disable Confirm Form Resubmission -->
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>