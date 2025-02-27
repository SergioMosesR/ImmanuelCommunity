<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/gerejaKi.css">
    <link rel="icon" href="../../assets/img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Efrata CC - Immanuel Community</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="../../index.php" style="color: white;">
            <img src="../../assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
            Immanuel Community
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../index.php">Home</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'church.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/church.php">Churches</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/services.php">Services</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'media.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/media.php">Media</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="../../auth/contact.php">Contact us</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="login.php"><i class="bi bi-person-lock"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <section class="contact-section py-5">
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="card">
                    <h1 class="mb-3">Efrata Community Chruch</h1>
                    <img src="../../assets/img/img_12.png" class="card-img-top" alt="Church Image">
                    <div class="card-body text-center">
                        <h5><i class="fa-solid fa-location-dot"></i> Jl. Citarum Utara III/2-4, Mlatiharjo, Kec.
                            Semarang Tim., Kota Semarang, Jawa Tengah 50126 <br>
                            <i class="fas fa-phone"></i><a href="tel:+62243546878"> Telp : 024-3546878</a>
                        </h5>
                        <a href="https://maps.app.goo.gl/2hXSr1Jd4Ky6q3Tx6" target="_blank" class="btn btn-primary"
                            style="background-color: #000000; border: none;">
                            Lihat Lokasi
                        </a>
                    </div>
                </div>

                <div class="qr-section">
                    <div class="qr-item" data-info="../../assets/pop_up/k1/01 Efrata Kolekte 1.jpg">
                        <img src="../../assets/kolekte1/k1-efrata.jpg" alt="Kolekte 1">
                        <p>Kolekte 01</p>
                    </div>
                    <div class="qr-item" data-info="../../assets/pop_up/k2/01 Efrata Kolekte 2.jpg">
                        <img src="../../assets/kolekte2/k2-efrata.jpg" alt="Kolekte 2">
                        <p>Kolekte 02</p>
                    </div>
                    <div class="qr-item" data-info="../../assets/pop_up/p/01 Efrata perpuluhan.jpg">
                        <img src="../../assets/perpuluhan/p-efrata.jpg" alt="Perpuluhan">
                        <p>Perpuluhan</p>
                    </div>
                </div>

                <!-- Popup Modal -->
                <div class="popup" id="popup">
                    <div class="popup-content">
                        <span class="close-btn" id="close-btn">&times;</span>
                        <img id="popup-img" alt="Popup Image" style="max-width: 100%; border-radius: 8px;">
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="text-align: left;">
                <h3 class="mt-5"> IBADAH RAYA - MINGGU </h3>
                <p>
                    Ibadah I : 07.00 WIB <br>
                    Ibadah II : 09.00 WIB <br>
                    Ibadah III : 17.00 WIB</p>
                <hr>

                <h3 class="mt-4"> DOA PAGI - SAAT TEDUH PEMURIDAN</h3>
                <p>Setiap Senin-Jumat | 05.00-06.00 WIB</p>
                <hr>

                <h3 class="mt-4"> MORNING WORSHIP</h3>
                <p>Setiap Sabtu | 05.00-06.15 WIB</p>
                <hr>

                <h3 class="mt-4"> PERSEKUTUAN TIM DOA</h3>
                <p>Setiap Senin | 18.00 WIB</p>
                <hr>

                <h3 class="mt-4"> EFRATA GOLDEN MINISTRY (LANSIA)</h3>
                <p>Setiap Sabtu ke-1 & ke-3 | 10.00 WIB</p>
                <hr>

                <h3 class="mt-4"> EFRATA MEN MINISTRY</h3>
                <p>Setiap Jumat ke-4 | 18.30 WIB</p>
                <hr>

                <h3 class="mt-4"> EFRATA WOMEN MINISTRY</h3>
                <p>Setiap Jumat ke-4 | 18.30 WIB</p>
                <hr>

                <h3 class="mt-4"> STAR-G GENERASI MUDA</h3>
                <p>Setiap Sabtu | 18.00 WIB</p>
                <hr>

                <h3 class="mt-4"> EFRATA KIDS COMMUNITY</h3>
                <br>Setiap Sabtu | 16.30 WIB<br>
                <p>Setiap Minggu | 07.15 & 09.15 & 17.15 WIB</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center text-left">
                    <div class="logo">
                        <img src="../../assets/img/logo.png" alt="Logo">
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
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script>
// JavaScript untuk menangani popup dengan gambar
document.addEventListener('DOMContentLoaded', () => {
    const qrItems = document.querySelectorAll('.qr-item');
    const popup = document.getElementById('popup');
    const popupImg = document.getElementById('popup-img');
    const closeBtn = document.getElementById('close-btn');

    // Tambahkan event listener untuk setiap .qr-item
    qrItems.forEach(item => {
        item.addEventListener('click', () => {
            const imgSrc = item.getAttribute('data-info'); // Ambil URL gambar dari data-info
            popupImg.src = imgSrc; // Set src pada elemen img di popup
            popup.style.display = 'flex'; // Tampilkan popup
        });
    });

    // Tutup popup saat tombol close diklik
    closeBtn.addEventListener('click', () => {
        popup.style.display = 'none';
    });

    // Tutup popup saat klik di luar konten popup
    window.addEventListener('click', (e) => {
        if (e.target === popup) {
            popup.style.display = 'none';
        }
    });
});
</script>