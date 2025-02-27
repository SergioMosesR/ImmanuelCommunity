<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    .church-section {
        background-image: url('../assets/img/img_8.png');
        background-size: cover;
        background-position: center;
        padding: 50px 0;
        color: white;
    }

    .church-card {
        background: rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .church-icon {
        margin-right: 10px;
    }

    .social-icons a {
        color: white;
        margin-right: 10px;
    }

    .social-icons a:hover {
        color: #ddd;
    }
    </style>
    <title>Media - Immanuel Community</title>
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
                    <a class="nav-link" href="../index.php">Home</a>
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
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../auth/contact.php">Contact us</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="login.php"><i class="bi bi-person-lock"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="church-section" style="margin-top: 6rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Eben Haezer Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/ebenhaezercc?igsh=ejZkZmJ3bm50cmNm" target="_blank"
                                class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@ebenhaezercommunitychurch?si=_thJGonMOApkY33F  "
                                target="_blank" class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Efrata Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/efratachurch?igsh=eWtxY3NpYmRveWpt" target="_blank"
                                class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@efratachurch?si=UJMMt4iDuE-EYkKG" target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Getsemani Community Chruch</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/gpdigetsemani?igsh=c2NsaHM3NDY4c2Fq" target="_blank"
                                class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@getsemanichurch5329?si=vLiuj22fRQ0z2SOP" target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Sinai Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/sinaicommunitychurch?igsh=MW55OWpiNjF4Z3E5cw=="
                                target="_blank" class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@sinaicommunitychurch1690?si=GCPmzhN4Mfk0mHKu" target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Petra Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/petracommunitychurch?igsh=MTAzN21veDVyaHh5MQ=="
                                target="_blank" class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@petramedia?si=nz5ZyHpor6BDqN3i" target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Mahanaim Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/mahanaimcommunitychurch?igsh=MTk4Nm9ydXFmdmhiaA=="
                                target="_blank" class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@mahanaimcommunitychurch717?si=cXMVvLJLzTtxGGB5"
                                target="_blank" class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Filadelfia Community Chruch</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/filadelfia_community_church?igsh=MXhiaWVvdjNhZ3B3aw=="
                                target="_blank" class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@filadelfiacommunitychurch?si=caYm4QaFZ9yJ961T" target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Hermon Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/hermoncc_smg?igsh=d3dqcWJvenpyYm9u" target="_blank"
                                class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@hermoncc?si=1yVHBIZleGXAeu4C   " target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Kana Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/kanacommunitychurch?igsh=aThmdHJyN3NqY2hr"
                                target="_blank" class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@kanacommunitychurch?si=7PPvuZ11ueb83ZBB" target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Sion Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/sion_community_church?igsh=em41cTAzOXRiNGto"
                                target="_blank" class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@sioncommunitychurch?si=fE_WgYGGU32oS5o1" target="_blank"
                                class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="church-card text-center bg-secondary rounded mb-2 p-5">
                        <h3>Karmel Community Church</h3>
                        <div class="social-icons mb-3">
                            <a href="https://www.instagram.com/karmelcc?igsh=ejUxd3U1d2gycXNo" target="_blank"
                                class="church-icon me-2">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://youtube.com/@karmelcommunitychurchsemar2996?si=UHeb-r-3jvgw4_AD"
                                target="_blank" class="church-icon">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                        <p><i class="fas fa-map-marker-alt"></i><a href="https://maps.app.goo.gl/bcAUNkhwGWQ8wxhi6"
                                target="_blank">
                                Jl. Krakatau Raya No.10, Kec. Semarang Timur, Semarang 50125
                            </a></p>

                        <p><i class="fas fa-building"></i><a href="mailto:yayasan.immanuel.semarang@gmail.com">
                                yayasan.immanuel.semarang@gmail.com</a></p>
                        <p><i class="fas fa-phone"></i><a href="tel:+62248414207">(024) 8414207 / 8418978</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright" style="text-align: center; margin-top: 3rem; font-size: 15px;">
            <p>&copy; 2024 <a style="font-weight: bold; text-align:center;">Immanuel Community</a>. All Rights Reserved.
            </p>
        </div>
    </footer>

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