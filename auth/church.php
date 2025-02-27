<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo.png">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        .custom-navbar {
            height: 6rem;
            background-color: #000000 !important;
        }

        .custom-navbar .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
        }

        .custom-navbar .navbar-brand img {
            margin-right: 0.5rem;
        }

        .navbar-collapse {
            background-color: #000000;
            padding: 10px;
        }

        .custom-navbar .nav-link {
            color: #ffffff !important;
            margin: 0rem 2rem;
            font-weight: bold;
        }

        .custom-navbar .nav-link:hover {
            color: #dddddd !important;
        }

        .navbar-nav {
            flex-direction: column;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler.active {
            background-color: #000000;
            border-radius: 5px;
        }

        .navbar-nav .nav-item.active .nav-link {
            color: #fff !important;
            /* Warna teks */
            background-color: #222;
            /* Warna latar belakang */
            border-radius: 5px;
            /* Radius untuk tampilan melengkung */
            padding: 0.5rem 1rem;
            /* Padding agar terlihat lebih rapi */
            font-weight: bold;
        }

        /* Transisi untuk efek halus */
        .navbar-nav .nav-item .nav-link {
            transition: all 0.3s ease-in-out;
        }

        /* Hover tetap berfungsi */
        .navbar-nav .nav-item .nav-link:hover {
            color: #e3e3e3 !important;
            background-color: #333;
        }

        .card {
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 253px;
            /* Set fixed width for the card */
            height: auto;
            /* Set fixed height for the card */
            margin: 10px;
            /* Add margin between cards */
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Set minimum height */
            height: 286.77px;
            /* Set fixed height */
            width: 253px;
            /* Set fixed width */
            padding: 12px;
        }

        .card-title {
            font-weight: bold;
            font-size: 1.1rem;
            margin-top: 8px;
        }

        .card-text {
            font-size: 0.9rem;
            color: #555;
            flex-grow: 1;
            margin-top: 20px;
        }

        .text-icon {
            display: flex;
            align-items: center;
            text-align: left;
            gap: 0.5rem;
            margin-top: auto;
        }


        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .card-img-top {
            height: 180px;
            /* Adjust height of the image to fit */
            width: 100%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .container text-center {
            margin-top: 20px;
        }

        .button {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 3px 26px;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            margin: 5px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button-container {
            display: flex;
            justify-content: center;
            /* Menempatkan tombol di tengah secara horizontal */
            width: 100%;
        }


        .button5 {
            background-color: #555555;
            color: white;
            border: 2px solid #555555;
            border-radius: 2px;
        }

        .button5:hover {
            background-color: #383838FF;
            color: white;
        }

        @media (max-width: 768px) {
            .card {
                text-align: center;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                height: auto;
                /* Memastikan card tidak terlalu tinggi */
                margin: 10px;
                /* Memberikan jarak antar card */
            }

            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                min-height: 200px;
                /* Menurunkan padding agar lebih kompak */
            }

            .card-title {
                font-weight: bold;
                font-size: 1rem;
                /* Mengurangi ukuran font title */
                margin-top: 6px;
            }

            .card-text {
                font-size: 0.85rem;
                /* Mengurangi ukuran font untuk teks */
                color: #555;
                flex-grow: 1;
                text-align: justify;
            }

            .text-icon {
                display: flex;
                align-items: center;
                text-align: left;
                gap: 0.4rem;
                margin-top: auto;
            }

            .btn-primary {
                background-color: #007bff;
                border: none;
                border-radius: 4px;
                margin-top: 8px;
                /* Mengurangi margin atas tombol */
                padding: 6px 12px;
                /* Mengurangi padding tombol */
                font-size: 0.85rem;
                /* Menurunkan ukuran font tombol */
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }

            .card-img-top {
                height: 180px;
                /* Menurunkan tinggi gambar agar lebih kompak */
                object-fit: cover;
                width: 100%;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }

            .container.text-center {
                margin-top: 18px;
            }

            .button {
                background-color: #04AA6D;
                border: none;
                color: white;
                padding: 8px 22px;
                /* Menurunkan padding tombol */
                text-align: center;
                text-decoration: none;
                font-size: 13px;
                /* Menurunkan ukuran font tombol */
                margin: 15px 0;
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button-container {
                display: flex;
                justify-content: center;
                width: 100%;
                flex-wrap: wrap;
                /* Tombol bisa membungkus jika ruang terbatas */
            }

            .button5 {
                background-color: #555555;
                color: white;
                border: 2px solid #555555;
                border-radius: 2px;
            }

            .button5:hover {
                background-color: #383838FF;
                color: white;
            }

            /* Tombol dengan ukuran lebih kecil */
            .button,
            .button5 {
                font-size: 13px;
                /* Menurunkan ukuran font untuk tombol */
            }

            .carousel-item {
                height: 400px;
                /* Lebih kecil pada perangkat mobile */
            }

            .carousel-item img {
                height: 100%;
                /* Menjaga gambar tetap responsif */
            }
        }




        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 3rem 0;
        }

        .footer .logo img {
            width: 50px;
            height: 50px;
            margin-right: 1rem;
        }

        .footer .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer .contact-info {
            margin-top: 1rem;
        }

        .footer .contact-info p {
            margin: 0.25rem 0;
        }

        .footer .contact-info i {
            margin-right: 0.5rem;
        }

        select,
        option {
            padding: 1rem;
            border-radius: 0.5rem;
            font-size: 1.5rem;
            background-color: transparent;
        }

        @media (max-width: 768px) {
            .card-body {
                width: 100%;
                /* Set width to 100% for small screens */
                height: auto;
                /* Set height to auto for responsive cards */
                min-height: unset;
            }

            .card {
                width: 100%;
                /* Allow the card to be responsive */
                height: auto;
                /* Allow the card to adjust height */
            }

            .card-img-top {
                height: 180px;
                object-fit: cover;
                width: 100%;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }
        }

        @media (max-width: 480px) {
            .carousel-item {
                height: 300px;
                /* Lebih kecil pada perangkat dengan layar kecil */
            }
        }

        @media (max-width: 576px) {
            .custom-navbar .nav-link {
                margin: 0.25rem 0;
                font-size: 1rem;
            }

            .footer .footer-logo {
                font-size: 1.2rem;
            }

            .footer .logo img {
                width: 40px;
                height: 40px;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 2rem;
            height: 2rem;
            background-color: transparent;
            border: none;
            font-size: 1rem;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: none;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            color: black;
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-control-prev {
            left: 10px;
        }

        .carousel-control-next {
            right: 10px;
        }

        main {
            margin-top: 20px;
        }

        .carousel-item {
            position: relative;
            width: 100%;
            height: 600px;
            /* Ukuran gambar diperbesar */
        }

        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .carousel-inner {
            overflow: hidden;
            /* Menghindari gambar meluas ke luar carousel */
        }
    </style>
    <title>Churches - Immanuel Community</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="../index.php" style="color: white;">
            <img src="../assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
            Immanuel Community
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../">Home</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'church.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../auth/church.php">Churches</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../auth/services.php">Services</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'media.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../auth/media.php">Media</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'renungan.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../auth/renungan.php">Evidence</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../auth/contact.php">Contact us</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="login.php"><i class="bi bi-person-lock"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="church-select-section" style="min-height: 100vh; background-color: #FFFFFFFF; margin-bottom: 6rem;">

        <section>
            <div id="churchCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/img_10.png" class="d-block w-100" style="object-fit: cover; height: 600px;" alt="Service Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_11.png" class="d-block w-100" style="object-fit: cover; height: 600px;" alt="Service Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_12.png" class="d-block w-100" style="object-fit: cover; height: 600px;" alt="Service Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#churchCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-caret-left fa-2x" style="color: black;"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#churchCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-caret-right fa-2x" style="color: black;"></i>
                </button>
            </div>
        </section>

        <h1 class="mb-4" style="text-align: center;">Daftar Gereja Immanuel community</h1>
        <hr>
        <div class="container text-center">
            <!-- batas -->
            <div class="container my-4">
                <div class="container my-4">
                    <div class="row row-cols-1 row-cols-md-4 g-3">
                        <!-- Card 1 -->
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Petra Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Petra Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. MT. Haryono No.844-846, Karangturi, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50124

                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 8414445
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/petra.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Efrata Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Efrata Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Citarum Utara III/2-4, Mlatiharjo, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50126
                                        </span>

                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 024-3546878
                                        </span>
                                    </p>

                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/efrata.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Hermon Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Hermon Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Pasirmas Raya No.143b, Panggung Lor, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50177
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp: 3547809
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/hermon.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/foto_gereja/Gereja EBEN HAEZER.jpg" class="card-img-top" alt="Eben Haezer Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Eben Haezer Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Kedungmundu No.128, Tandang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50274
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 6700002
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/eben-haezer.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Mahanaim Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Mahanaim Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Puri Anjasmoro Blk. K6 No.7 blok p, Tawangsari, Semarang Barat, Semarang City, Central Java 50144
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 7612248
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/mahanaim.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Filadelfia Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Filadelfia Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Padi Raya No.12, Gebangsari, Kec. Genuk, Kota Semarang, Jawa Tengah 50117
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 6582766
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/filadelfia.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/foto_gereja/Gereja Karmel.jpg" class="card-img-top" alt="Karmel Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Karmel Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Nangka Sel. No.43, Lamper Kidul, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 8443375
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/karmel.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Sinai Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Sinai Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Muradi No.52, Kalibanteng Kulon, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50183
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp: 7606167
                                            <br>
                                            HP: 08995854173
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/sinai.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Kana Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Kana Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Kawi No.5 / 111, Tegalsari, Kec. Candisari, Kota Semarang, Jawa Tengah 50252
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 6716328
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/kana.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Getsemani Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Getsemani Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Jatiluhur Bar. I No.172 A, Ngesrep, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50261
                                        </span>
                                        <span class="text-icon" style="margin-top: 10px;">
                                            <i class="bi bi-telephone"></i>
                                            Telp : 76401050
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/getsemani.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm rounded">
                                <img src="../assets/img/sementara.jpg" class="card-img-top" alt="Sion Community Church">
                                <div class="card-body">
                                    <h5 class="card-title">Sion Community Church</h5>
                                    <p class="card-text">
                                        <span class="text-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            Jl. Kaba Raya No.51, Tandang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50274
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <button class="button button5">
                                            <a href="../auth/gereja/sion.php" rel="noopener noreferrer" style="color:white; text-decoration: none;">Selengkapnya</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- batas -->

        <!-- <form method="GET" action="" id="churchForm">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6">
                    <select name="church" class="form-select form-select-lg mb-4" onchange="this.form.submit()" style="color: #ffffff; background: #191919; border: none;">
                        <option value="" selected>Pilih Gereja</option>
                        <option value="petra" <?php if (isset($_GET['church']) && $_GET['church'] == 'petra') echo 'selected'; ?>>Petra Community Church</option>
                        <option value="efrata" <?php if (isset($_GET['church']) && $_GET['church'] == 'efrata') echo 'selected'; ?>>Efrata Community Church</option>
                        <option value="hermon" <?php if (isset($_GET['church']) && $_GET['church'] == 'hermon') echo 'selected'; ?>>Hermon Community Church</option>
                        <option value="eben-haezer" <?php if (isset($_GET['church']) && $_GET['church'] == 'eben-haezer') echo 'selected'; ?>>Eben Haezer Community Church</option>
                        <option value="mahanaim" <?php if (isset($_GET['church']) && $_GET['church'] == 'mahanaim') echo 'selected'; ?>>Mahanaim Community Church</option>
                        <option value="filadelfia" <?php if (isset($_GET['church']) && $_GET['church'] == 'filadelfia') echo 'selected'; ?>>Filadelfia Community Church</option>
                        <option value="karmel" <?php if (isset($_GET['church']) && $_GET['church'] == 'karmel') echo 'selected'; ?>>Karmel Community Church</option>
                        <option value="sinai" <?php if (isset($_GET['church']) && $_GET['church'] == 'sinai') echo 'selected'; ?>>Sinai Community Church</option>
                        <option value="kana" <?php if (isset($_GET['church']) && $_GET['church'] == 'kana') echo 'selected'; ?>>Kana Community Church</option>
                        <option value="getsemani" <?php if (isset($_GET['church']) && $_GET['church'] == 'getsemani') echo 'selected'; ?>>Getsemani Community Church</option>
                        <option value="sion" <?php if (isset($_GET['church']) && $_GET['church'] == 'sion') echo 'selected'; ?>>Sion Community Church</option>
                    </select>
                </div>
            </div>
        </form>

        <div id="churchDetails" class="mt-5">
            <?php
            if (isset($_GET['church']) && !empty($_GET['church'])) {
                $church = $_GET['church'];

                if ($church == 'petra') {
                    include "gereja/petra.php";
                } elseif ($church == 'efrata') {
                    include "gereja/efrata.php";
                } elseif ($church == 'hermon') {
                    include "gereja/hermon.php";
                } elseif ($church == 'eben-haezer') {
                    include "gereja/eben-haezer.php";
                } elseif ($church == 'mahanaim') {
                    include "gereja/mahanaim.php";
                } elseif ($church == 'filadelfia') {
                    include "gereja/filadelfia.php";
                } elseif ($church == 'karmel') {
                    include "gereja/karmel.php";
                } elseif ($church == 'sinai') {
                    include "gereja/sinai.php";
                } elseif ($church == 'kana') {
                    include "gereja/kana.php";
                } elseif ($church == 'getsemani') {
                    include "gereja/getsemani.php";
                } elseif ($church == 'sion') {
                    include "gereja/sion.php";
                }
            }
            ?>
        </div>
        </div> -->
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center text-left">
                    <div class="logo">
                        <img src="../assets/img/logo.png" alt="Logo">
                    </div>
                    <div class="footer-logo">
                        Immanuel Community
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i><a href="https://maps.app.goo.gl/bcAUNkhwGWQ8wxhi6" target="_blank">
                                Jl. Krakatau Raya No.10, Kec. Semarang Timur, Semarang 50125
                            </a></p>

                        <p><i class="fas fa-building"></i><a href="mailto:yayasan.immanuel.semarang@gmail.com"> yayasan.immanuel.semarang@gmail.com</a></p>
                        <p><i class="fas fa-phone"></i><a href="tel:+62248414207">(024) 8414207 / 8418978</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright" style="text-align: center; margin-top: 3rem; font-size: 15px;">
            <p>&copy; 2024 <a style="font-weight: bold; text-align:center;">software engineering</a>. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var kidsCarousel = new bootstrap.Carousel('#kidsCarousel');
            var youthCarousel = new bootstrap.Carousel('#youthCarousel');
            var professionalCarousel = new bootstrap.Carousel('#professionalCarousel');
            var serviceCarousel = new bootstrap.Carousel('#serviceCarousel');
            var elderCarousel = new bootstrap.Carousel('#elderCarousel');

            document.querySelectorAll('.carousel-control-prev').forEach(function(button) {
                button.addEventListener('click', function() {
                    var target = this.getAttribute('data-bs-target');
                    var carousel = new bootstrap.Carousel(target);
                    carousel.prev();
                });
            });

            document.querySelectorAll('.carousel-control-next').forEach(function(button) {
                button.addEventListener('click', function() {
                    var target = this.getAttribute('data-bs-target');
                    var carousel = new bootstrap.Carousel(target);
                    carousel.next();
                });
            });
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script>
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        navbarToggler.addEventListener('click', function() {
            navbarToggler.classList.toggle('active');
        });
    </script>


</body>

</html>