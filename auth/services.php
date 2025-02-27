<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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

        .button-container {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            background-color: #04aa6d;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #036d4c;
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

        .carousel-control-prev,
        .carousel-control-next {
            width: 2rem;
            height: 2rem;
            background-color: transparent;
            border: none;
            font-size: 2rem;
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

        .carousel-inner .carousel-item img {
            width: 100%;
            /* Membuat gambar memiliki lebar penuh */
            height: 100vh;
            /* Membuat gambar menutupi ketinggian layar */
            object-fit: cover;
            /* Memastikan gambar mengisi area tanpa merusak rasio aspek */
        }
    </style>
    <title>Services - Immanuel Community</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="../index.php" style="color: white;">
            <img src="../assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
            Immanuel Community
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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


    <main class="container-fluid" style="margin-top: 8rem;">
        <section>
            <div id="kidsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/img_1.png" class="d-block mx-auto w-10" alt="Kids Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_2.png" class="d-block mx-auto w-10" alt="Kids Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_3.png" class="d-block mx-auto w-10" alt="Kids Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#kidsCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-caret-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#kidsCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-caret-right"></i>
                </button>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="section-content p-5 text-center">
                        <h2>KIDS</h2>
                        <p>
                            Sekolah Minggu adalah program pendidikan agama Kristen untuk anak-anak di gereja, diadakan setiap Minggu selama ibadah orang dewasa.
                            Tujuannya adalah mengajarkan prinsip-prinsip iman Kristen dengan metode yang sesuai untuk anak-anak, seperti cerita, lagu rohani,
                            dan aktivitas kreatif. Program ini membantu anak-anak memahami nilai-nilai moral, doa, Alkitab, dan kasih Allah, sambil melibatkan
                            orang tua dalam dukungan dan partisipasi mereka.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="youthCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/img_4.png" class="d-block mx-auto w-10" alt="Youth Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_5.png" class="d-block mx-auto w-10" alt="Youth Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_6.png" class="d-block mx-auto w-10" alt="Youth Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#youthCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-caret-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#youthCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-caret-right"></i>
                </button>

            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="section-content p-5 text-center">
                        <h2>YOUTH-STAR GENERATION</h2>
                        <p>
                            Ibadah youth adalah kegiatan keagamaan yang dirancang untuk remaja dan pemuda, bertujuan memperkuat iman, membangun karakter,
                            dan memberi bimbingan moral. Kegiatan ini mencakup pembelajaran nilai-nilai agama, aktivitas sosial untuk mempererat hubungan,
                            serta pengembangan diri melalui bimbingan tentang kehidupan dan pengambilan keputusan. Selain itu, ibadah youth sering melibatkan
                            kegiatan kreatif seperti seni, musik, dan drama untuk menyampaikan pesan keagamaan, memberikan ruang bagi kaum muda untuk tumbuh
                            dalam iman dan berinteraksi positif dengan sesama.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="professionalCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/img_7.png" class="d-block mx-auto w-10" alt="Professional Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_8.png" class="d-block mx-auto w-10" alt="Professional Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_9.png" class="d-block mx-auto w-10" alt="Professional Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#professionalCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-caret-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#professionalCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-caret-right"></i>
                </button>

            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="section-content p-5 text-center">
                        <h2>PROFESSIONAL</h2>
                        <p>
                            Pelayan profesional Kristen adalah mereka yang secara penuh waktu melayani dalam gereja atau organisasi keagamaan, seperti pendeta,
                            pastor, atau pekerja gereja lainnya. Mereka bertanggung jawab untuk memimpin ibadah, memberikan khotbah atau pengajaran,
                            menyelenggarakan sakramen seperti baptisan dan Perjamuan Kudus, serta memberikan bimbingan rohani kepada jemaat, Pelayanan mereka
                            bertujuan untuk memelihara dan memperkuat iman serta memfasilitasi pertumbuhan spiritual komunitas gereja.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/img_10.png" class="d-block mx-auto w-10" alt="Service Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_11.png" class="d-block mx-auto w-10" alt="Service Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_12.png" class="d-block mx-auto w-10" alt="Service Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-caret-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-caret-right"></i>
                </button>

            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="section-content p-5 text-center">
                        <h2>SUNDAY SERVICE</h2>
                        <p>
                            Ibadah adalah kegiatan untuk mendekatkan diri kepada Tuhan, menyatakan rasa syukur, dan memohon petunjuk. Bentuk ibadah meliputi doa,
                            pembacaan Alkitab, pujian dan penyembahan melalui nyanyian, serta partisipasi dalam sakramen seperti Perjamuan Kudus dan baptisan.
                            Ibadah juga mencakup khotbah, dimana firman Tuhan diajarkan dan direnungkan. Tujuannya adalah untuk memperkuat iman, membangun
                            komunitas gereja, dan mengikuti ajaran Yesus Kristus dalam kehidupan sehari-hari.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="elderCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/img_13.png" class="d-block mx-auto w-10" alt="Elder Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_14.png" class="d-block mx-auto w-10" alt="Elder Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/img_15.png" class="d-block mx-auto w-10" alt="Elder Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#elderCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-caret-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#elderCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-caret-right"></i>
                </button>

            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="section-content p-5 text-center">
                        <h2>ELDER SERVICE</h2>
                        <p>
                            Ibadah lansia adalah kegiatan keagamaan yang khusus dirancang untuk memenuhi kebutuhan rohani dan sosial lansia dalam komunitas
                            Kristen. Kegiatan ini bertujuan untuk memelihara iman mereka, memperkuat koneksi dengan Tuhan, dan memelihara hubungan yang mendalam
                            dengan sesama.
                        </p>
                    </div>
                </div>
            </div>
            <div class="button-container">
                <button class="button button5">
                    <a href="../auth/contact.php"
                        rel="noopener noreferrer" style="color:white; text-decoration: none;">Hubungi Kami</a>
                </button>
            </div>
        </section>

    </main>

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
            <p>&copy; 2024 <a style="font-weight: bold; text-align:center;">Immanuel Community</a>. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Mendapatkan elemen tombol navbar
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        // Tambahkan event listener untuk toggle click
        navbarToggler.addEventListener('click', function() {
            // Jika navbar collapse terbuka, tambahkan kelas active, jika tidak, hapus
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.classList.remove('active');
            } else {
                navbarToggler.classList.add('active');
            }
        });
    </script>
</body>

</html>