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
            background-color: #f4f4f4;
            /* Warna latar belakang terang */
            background-image: url('path_to_image.jpg');
            /* Ganti dengan path gambar latar */
            background-size: cover;
            /* Menutupi seluruh layar */
            background-position: center;
            /* Menempatkan gambar di tengah */
            background-attachment: fixed;
            /* Membuat latar tetap saat scroll */
            font-family: Arial, sans-serif;
            /* Menggunakan font yang bersih dan modern */
        }

        .custom-navbar,
        .footer {
            background-color: rgba(0, 0, 0, 0.7);
            /* Memberikan efek transparansi */
        }

        /* Gunakan gradient sebagai background alternatif */
        .church-section {
            background-image: url('../assets/img/img_8.png');
            background-size: cover;
            background-position: center;
            padding: 50px 0;
            color: white;
        }

        .instagram-container {
            background: rgba(255, 255, 255, 0.9);
            /* Memberikan sedikit transparansi */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
            padding: 50px 0;
            color: white;
        }

   .church-card {
    background: rgba(232, 232, 232, 0.8); /* Menurunkan opacity */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Memperbaiki bayangan */
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px; /* Ganti auto agar ada jarak antar elemen */
    max-width: 100%; /* Agar tidak melebihi lebar container */
    box-sizing: border-box; /* Pastikan padding tidak membuat elemen melebar */
}

/* Responsif untuk layar kecil */
@media (max-width: 600px) {
    .church-card {
        padding: 15px; /* Mengurangi padding di layar kecil */
        border-radius: 5px; /* Radius lebih kecil untuk layar kecil */
    }
}


        .instagram-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            /* Menyesuaikan kolom otomatis */
            gap: 20px;
            /* Jarak antar elemen */
            max-width: 20%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Setelan untuk setiap embed Instagram */
        .instagram-container {
            border: 1px solid #ddd;
            /* Border agar lebih terlihat terpisah */
            padding: 10px;
            /* Memberikan jarak di dalam kontainer */
            background: #fff;
            /* Warna latar belakang */
        }

        /* Menangani blockquote Instagram */
        .instagram-container blockquote {
            margin: 0;
            /* Menghilangkan margin default blockquote */
            padding: 0;
            /* Menghilangkan padding default */
            width: 100%;
            border: none;
        }

        .responsive-iframe {
            width: 100%;
            /* Menyesuaikan dengan kolom */
            aspect-ratio: 16 / 9;
            /* Rasio aspek standar untuk video */
            border: 0;
            /* Menghapus border */
            border-radius: 3px;
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


        /* Responsif */
        @media (max-width: 768px) {
            .instagram-container {
                grid-template-columns: 1fr;
                /* Menjadi 1 kolom pada layar kecil */
            }
        }

        .video {
            margin-bottom: 20px;
            flex-basis: 30%;
            padding: 10px;
            box-sizing: border-box;
        }

        iframe {
            display: block;
            margin: 10px 0;
            width: 100%;
            height: 150px;
        }

        .channel-section {
            margin-bottom: 40px;
        }

        .channel-section h2 {
            margin-bottom: 20px;
        }

        .video-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .video-row .video:nth-child(3n) {
            margin-right: 0;
        }

        .instagram-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            /* Menyesuaikan kolom otomatis */
            gap: 20px;
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .instagram-container {
            border: 1px solid #ddd;
            padding: 10px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            /* Agar konten yang lebih besar tetap terpotong jika melebihi ukuran card */
            display: flex;
            flex-direction: column;
            /* Vertikal layout */
        }

        .instagram-container img,
        .instagram-container video {
            width: 100%;
            /* Gambar atau video akan menyesuaikan lebar container */
            height: auto;
            /* Menjaga proporsi gambar/video */
            border-radius: 8px;
            /* Menambahkan sudut melengkung */
        }

        .instagram-container video {
            max-height: 400px;
            /* Batasi tinggi video agar tidak terlalu besar */
        }

        .instagram-container .carousel-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            /* Menambahkan sudut melengkung pada gambar carousel */
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

    <section class="church-section" style="margin-top: 6rem;">
    <div class="container">
        <div class="row">

            <div class="church-card text-left bg-secondary rounded mb-2 p-5 text-center">
                <h3>Eben Haezer Community Church</h3>
                <div class="social-icons mb-3">
                    <div class="instagram-grid">
                        <?php
                        $accounts = [
                            [
                                "userId" => "17841449608113641",
                                "accessToken" => "IGAA7qu1PXNhVBZAE1UbjZANQTZAEREZAFcEFaM184eE82TmtfRnl3SkhheWZARN1ExeWt6d1NQbWtZAdmtfdUdTN3VlX2xRVnhka2s4RUw0MU1HOGJMaUxGSW84WGNRSXlrd2VhdmhMT0ZA3dFc2dmJKYllUNEZANVjAxcmdVNEtyR3pPZAwZDZD"
                            ]
                        ];

                        foreach ($accounts as $account) {
                            $userId = $account['userId'];
                            $accessToken = $account['accessToken'];

                            $url = "https://graph.instagram.com/$userId/media?fields=id,caption,media_type,media_url,permalink&access_token=$accessToken";

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($ch);

                            if (curl_errno($ch)) {
                                echo "<p>cURL Error: " . curl_error($ch) . "</p>";
                                curl_close($ch);
                                continue;
                            }
                            curl_close($ch);

                            $data = json_decode($response, true);

                            if (isset($data['error'])) {
                                echo "<p>Error: " . $data['error']['message'] . "</p>";
                            } else {
                                if (!empty($data['data'])) {
                                    $posts = array_slice($data['data'], 0, 3);

                                    foreach ($posts as $post) {
                                        $mediaUrl = $post['media_url'];
                                        $mediaType = $post['media_type'];

                                        if ($mediaType == 'VIDEO') {
                                            echo "<div class='instagram-container'>";
                                            echo "<video controls class='w-100 ig-media'>
                                            <source src='$mediaUrl' type='video/mp4'>
                                            Your browser does not support the video tag.
                                          </video>";
                                            echo "</div>";
                                        } elseif ($mediaType == 'CAROUSEL_ALBUM') {
                                            $carouselUrl = "https://graph.instagram.com/{$post['id']}/children?access_token=$accessToken";
                                            $ch = curl_init();
                                            curl_setopt($ch, CURLOPT_URL, $carouselUrl);
                                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                            $carouselResponse = curl_exec($ch);

                                            if (!curl_errno($ch)) {
                                                $carouselData = json_decode($carouselResponse, true);
                                                if (isset($carouselData['data'])) {
                                                    echo "<div id='carouselExampleControls' class='carousel slide' data-bs-ride='carousel'>";
                                                    echo "<div class='carousel-inner'>";

                                                    foreach ($carouselData['data'] as $index => $carouselItem) {
                                                        $carouselItemUrl = $carouselItem['media_url'];
                                                        $activeClass = ($index == 0) ? 'active' : '';
                                                        echo "<div class='carousel-item $activeClass'>
                                                        <img src='$carouselItemUrl' class='d-block w-100 ig-media' alt='Carousel Image'>
                                                      </div>";
                                                    }

                                                    echo "</div>";
                                                    echo "<button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
                                                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                                    <span class='visually-hidden'>Previous</span>
                                                  </button>";
                                                    echo "<button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
                                                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                                    <span class='visually-hidden'>Next</span>
                                                  </button>";
                                                    echo "</div>";
                                                }
                                            }
                                            curl_close($ch);
                                        } else {
                                            echo "<div class='instagram-container'>";
                                            echo "<img src='$mediaUrl' alt='Instagram Post' class='w-100 ig-media'>";
                                            echo "</div>";
                                        }
                                    }
                                } else {
                                    echo "<p>No posts found.</p>";
                                }
                            }
                        }
                        ?>
                    </div>
                    <script async src="//www.instagram.com/embed.js"></script> <br>
                    <div class="text-right">
                        <a href="https://www.instagram.com/ebenhaezercc?igsh=ejZkZmJ3bm50cmNm" target="_blank"
                            class="church-icon me-2">
                            <i class="fab fa-instagram"></i> Selengkapnya
                        </a>
                    </div>
                    <hr><br>
                    <div class="container my-4">
                        <div class="row">
                            <div id="videos" class="d-flex flex-wrap justify-content-center gap-4"></div>
                            <script>
                                const apiKey = "AIzaSyBS8xIJKeF81baB6GZfBK6mpZF_xARg3yk";
                                const handles = [{
                                    name: "Eben Haezer Community Church",
                                    handle: "@ebenhaezercommunitychurch"
                                }];
                                const maxResults = 3;

                                async function fetchChannelId(handle) {
                                    const url = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&q=${handle}&part=snippet&type=channel`;
                                    const response = await fetch(url);
                                    const data = await response.json();
                                    return data.items[0]?.id?.channelId;
                                }

                                async function fetchLatestVideos(channelId) {
                                    const url = `https://www.googleapis.com/youtube/v3/search?key=${apiKey}&channelId=${channelId}&order=date&part=snippet&type=video&maxResults=${maxResults}`;
                                    const response = await fetch(url);
                                    const data = await response.json();
                                    return data.items;
                                }

                                async function displayVideosForChannel(channelId, channelName) {
                                    const videosContainer = document.getElementById("videos");

                                    const channelSection = document.createElement("div");
                                    channelSection.classList.add("channel-section", "text-center");
                                    const channelTitle = document.createElement("h2");
                                    channelTitle.textContent = channelName;
                                    channelSection.appendChild(channelTitle);

                                    const videoRow = document.createElement("div");
                                    videoRow.classList.add("row", "g-4");

                                    const videos = await fetchLatestVideos(channelId);
                                    videos.forEach((video) => {
                                        const colDiv = document.createElement("div");
                                        colDiv.classList.add("col-12", "col-md-6", "col-lg-4");

                                        const videoDiv = document.createElement("div");
                                        videoDiv.classList.add("video", "p-3", "rounded", "shadow-sm");

                                        const iframe = document.createElement("iframe");
                                        iframe.src = `https://www.youtube.com/embed/${video.id.videoId}`;
                                        iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                                        iframe.allowFullscreen = true;
                                        iframe.style.width = "100%";
                                        iframe.style.height = "auto";

                                        videoDiv.appendChild(iframe);
                                        colDiv.appendChild(videoDiv);
                                        videoRow.appendChild(colDiv);
                                    });

                                    channelSection.appendChild(videoRow);
                                    videosContainer.appendChild(channelSection);
                                }

                                async function displayLatestVideos() {
                                    const videosContainer = document.getElementById("videos");
                                    videosContainer.innerHTML = "";

                                    for (const { name, handle } of handles) {
                                        try {
                                            const channelId = await fetchChannelId(handle);
                                            if (!channelId) {
                                                console.error(`Channel ID tidak ditemukan untuk handle: ${handle}`);
                                                continue;
                                            }
                                            await displayVideosForChannel(channelId, name);
                                        } catch (error) {
                                            console.error(`Error fetching videos for handle: ${handle}`, error);
                                        }
                                    }
                                }

                                displayLatestVideos();
                            </script>
                        </div>
                        <div class="text-right">
                            <a href="https://youtube.com/@ebenhaezercommunitychurch?si=_thJGonMOApkY33F"
                                target="_blank" class="church-icon">
                                <i class="fab fa-youtube"></i> Selengkapnya
                            </a>
                        </div>
                    </div>                 </div>
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