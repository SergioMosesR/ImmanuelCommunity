<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CommunityUser/config/fungsi.php';
?>

<head>
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer onload="initializeGIS()"></script>
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.gstatic.com https://apis.google.com https://accounts.google.com; object-src 'none';">
</head>

<style>
    #home {
        height: 100vh;
        /* Tinggi penuh layar */
        width: 100%;
        /* Lebar penuh */
        overflow: hidden;
        /* Mencegah konten yang keluar */
        position: relative;
        /* Untuk menjaga elemen di dalamnya */
    }


    .background-video {
        margin-bottom: 0 !important;
        display: block;
        width: 100%;
        height: 72%;
    }

    #churches .container {
        padding-top: 0 !important;
        margin-top: 0 !important;
    }

    #pdf-viewer-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        max-height: 750px;
        overflow: auto;
        padding: 20px;
        background-color: #f9f9f9;
        margin: 20px auto;
        width: 80%;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        color: black;
        position: relative;
    }

    /* Membuat container sesuai dengan bentuk objek (rasio 16:9) */
    #file-preview-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        /* Rasio 16:9 */
        height: 0;
        overflow: hidden;
    }

    #file-preview-container object {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        min-height: 400px;
        /* Menambah sedikit tinggi */
    }

    /* Scrollbar pada container */
    #pdf-viewer-container::-webkit-scrollbar {
        width: 8px;
    }

    #pdf-viewer-container::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 4px;
    }

    #pdf-viewer-container::-webkit-scrollbar-thumb:hover {
        background-color: #aaa;
    }

    /* Untuk memastikan kanvas PDF tetap responsif */
    #pdf-viewer canvas {
        display: block;
        margin: 10px auto;
        max-width: 100%;
        height: auto;
    }

    /* Buttons styling */
    .button-container {
        text-align: center;
        margin-top: 20px;
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
        width: 100%;
    }

    .button5 {
        background-color: #555555;
        color: white;
        border: 2px solid #555555;
        border-radius: 2px;
    }

    .button5:hover {
        background-color: #383838;
        color: white;
    }

    #map-container {
        display: flex;
        justify-content: center;
        margin: 20px;
    }

    #map {
        height: 500px;
        width: 80%;
        max-width: 800px;
        border: 2px solid #ddd;
        border-radius: 8px;
    }

    .carousel-image {
        height: 100vh;
        /* Sesuaikan dengan tinggi section */
        object-fit: cover;
        object-position: center;
    }

    /* Pastikan carousel memenuhi section */
    .carousel {
        height: 100%;
        /* Sesuaikan dengan tinggi section */
        width: 100%;
    }

    /* Tombol navigasi tanpa background */
    .carousel-control-prev.no-bg,
    .carousel-control-next.no-bg {
        background: none;
        border: none;
        outline: none;
        color: white;
        /* Warna ikon */
        font-size: 2rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control-prev.no-bg {
        left: 20px;
        /* Jarak dari sisi kiri */
    }

    .carousel-control-next.no-bg {
        right: 20px;
        /* Jarak dari sisi kanan */
    }

    .carousel-control-prev.no-bg:hover,
    .carousel-control-next.no-bg:hover {
        color: #ccc;
        /* Warna ikon saat hover */
    }

    /* Atur tombol dalam lapisan atas */
    .carousel-control-prev,
    .carousel-control-next {
        z-index: 10;
    }

    @media (max-width: 1200px) {
        #pdf-viewer-container {
            width: 85%;
            max-height: 500px;
            padding: 15px;
        }

        #pdf-viewer canvas {
            max-width: 90%;
        }

        .background-video {
            height: auto;
        }

        .home-section {
            height: auto;
        }
    }

    @media (max-width: 992px) {
        #pdf-viewer-container {
            width: 90%;
            max-height: 450px;
            padding: 12px;
        }

        .button {
            font-size: 14px;
            padding: 8px 16px;
        }

        #map {
            width: 100%;
            height: 400px;
        }

        .background-video {
            height: 60vh;
        }
    }

    @media (max-width: 768px) {
        #pdf-viewer-container {
            width: 90%;
            max-height: 400px;
            padding: 8px;
        }

        #file-preview-container object {
            width: 100%;
            height: 100%;
        }
    }

    @media (max-width: 480px) {
        #pdf-viewer-container {
            width: 100%;
            max-height: 300px;
            padding: 5px;
            margin: 0 10px;
        }

        #file-preview-container object {
            width: 100%;
            height: 400px;
            /* Menambah tinggi sedikit */
        }
    }
</style>

<section id="home" class="home-section d-flex align-items-center justify-content-center">
    <div id="kidsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/img_4.png" class="carousel-image d-block mx-auto w-100" alt="Youth Image 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/img_5.png" class="carousel-image d-block mx-auto w-100" alt="Youth Image 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/img_6.png" class="carousel-image d-block mx-auto w-100" alt="Youth Image 3">
            </div>
        </div>
        <button class="carousel-control-prev no-bg" type="button" data-bs-target="#kidsCarousel" data-bs-slide="prev">
            <i class="fa-solid fa-caret-left"></i>
        </button>
        <button class="carousel-control-next no-bg" type="button" data-bs-target="#kidsCarousel" data-bs-slide="next">
            <i class="fa-solid fa-caret-right"></i>
        </button>
    </div>
</section>

<section id="churches" class="churches-section py-5">
    <div class="container">
        <h2 class="text-center display-3 font-weight-bold"><?php echo webHome('judul') ?? ''; ?></h2>
        <p style="font-weight: normal; font-size: 25px; text-align: center;">
            <?php echo webHome('deskripsi') ?? ''; ?>
        </p>
    </div>
</section>

<section class="section-imani" id="pengakuan-iman">
    <div class="container">
        <h2 style="margin-bottom: 5%;">Immanuel Vision</h2>
        <p class="mb-4"></p>
        <div id="pdf-viewer-container">
            <div id="file-preview-container"></div>
        </div>
        <div class="button-container">
            <button class="button button5">
                <a href="https://drive.google.com/drive/folders/1-yrd5aWTamIL8G0F3hIQxrueM6Kmt7j4" target="_blank" rel="noopener noreferrer" style="color:white; text-decoration: none;">Lainnya</a>
            </button>
        </div>
    </div>

    <script>
    const folderId = '1-yrd5aWTamIL8G0F3hIQxrueM6Kmt7j4';
    const CLIENT_ID = '518088352174-nb9mlt3n8jvkv4sh9lne5lhbuaou6j0i.apps.googleusercontent.com';
    const API_KEY = 'AIzaSyBS8xIJKeF81baB6GZfBK6mpZF_xARg3yk';
    const SCOPES = 'https://www.googleapis.com/auth/drive.readonly';

    function initClient() {
        gapi.client.init({
            apiKey: API_KEY,
            discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest'],
        }).then(() => {
            console.log('GAPI client initialized.');
            autoLogin();
        }).catch((error) => {
            console.error('Error during gapi client initialization:', error);
        });
    }

    function initializeGIS() {
        gapi.load('client', initClient);

        google.accounts.id.initialize({
            client_id: CLIENT_ID,
            callback: handleCredentialResponse,
            auto_select: true
        });

        google.accounts.id.prompt((notification) => {
            if (notification.isNotDisplayed() || notification.isSkippedMoment()) {
                console.log('Prompt tidak ditampilkan, mencoba akses tanpa interaksi.');
                listFiles();
            }
        });
    }

    function handleCredentialResponse(response) {
        const decodedCredential = parseJwt(response.credential);
        const accessToken = decodedCredential.access_token;

        gapi.client.setToken({
            access_token: accessToken
        });

        listFiles();
    }

    function parseJwt(token) {
        const base64Url = token.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        const jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
        return JSON.parse(jsonPayload);
    }

    function listFiles() {
        gapi.client.drive.files.list({
            q: `'${folderId}' in parents and mimeType='application/pdf' and trashed=false`,
            orderBy: 'modifiedTime desc',
            fields: 'files(id, name, modifiedTime, mimeType)',
            pageSize: 1
        }).then((response) => {
            const files = response.result.files;
            const container = document.getElementById('file-preview-container');

            if (files && files.length > 0) {
                const file = files[0];
                const fileUrl = `https://drive.google.com/file/d/${file.id}/preview`;

                const fileListHtml = `
                    <iframe src="${fileUrl}" width="100%" height="600" style="border: none;"></iframe>
                    <p style="text-align: center; margin-top: 10px;">
                        Jika PDF tidak tampil, Anda dapat <a href="https://drive.google.com/file/d/${file.id}/view" target="_blank">mengunduh file di sini</a>.
                    </p>
                `;
                container.innerHTML = fileListHtml;
            } else {
                container.innerHTML = '<p>No files found.</p>';
            }
        }).catch((error) => {
            console.error('Error fetching files:', error);
            document.getElementById('file-preview-container').innerHTML = '<p>Error loading file.</p>';
        });
    }

    function autoLogin() {
        google.accounts.id.prompt((notification) => {
            if (notification.isNotDisplayed() || notification.isSkippedMoment()) {
                console.log('Tidak ada prompt login, mencoba akses file langsung.');
                listFiles();
            }
        });
    }

    window.onload = initializeGIS;
</script>
</section>

<section class="section-lokasi" id="lokasi">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsMjkj0lMJPs5Mm2YXVQLr1IO0SgFMx3k"></script>

    <h1 style="font-weight:bold;">Lokasi Gereja Immanuel Community</h1>
    <div id="map-container">
        <div id="map"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.990257, 110.423727], 12);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Daftar lokasi dengan lat dan lng
        var locations = [{
                lat: -6.970247146229344,
                lng: 110.44178310828214,
                link: 'https://maps.app.goo.gl/Xf7STuCnga6YZRx6A',
                name: 'Efrata CC'
            },
            {
                lat: -6.993138359670686,
                lng: 110.43228676780805,
                link: 'https://maps.app.goo.gl/FEqdSm7H6g5BmpgcA',
                name: 'Petra CC'
            },
            {
                lat: -6.961177897599155,
                lng: 110.40521525060964,
                link: 'https://maps.app.goo.gl/Q3v55r6F4tnQBv5v6',
                name: 'Hermon CC'
            },
            {
                lat: -7.013528470462205,
                lng: 110.45066974875718,
                link: 'https://maps.app.goo.gl/VgSjAnqeU5MFbWr99',
                name: 'Eben Haezer CC'
            },
            {
                lat: -6.963180049320967,
                lng: 110.46595412177354,
                link: 'https://maps.app.goo.gl/b58m5ttcCXSiCygM9',
                name: 'Filadelfia CC'
            },
            {
                lat: -7.033071986564515,
                lng: 110.42206576949592,
                link: 'https://maps.app.goo.gl/XoNWZ2FcdzYyLPb46',
                name: 'Getsemani CC'
            },
            {
                lat: -7.009732009288218,
                lng: 110.42418827944661,
                link: 'https://maps.app.goo.gl/5YpDvNnbhFifHWpG6',
                name: 'Kana CC'
            },
            {
                lat: -7.008943071163984,
                lng: 110.43835475246355,
                link: 'https://maps.app.goo.gl/GXmSZtcYXXSXtG5m8',
                name: 'Karmel CC'
            },
            {
                lat: -6.971460352282355,
                lng: 110.38635229479073,
                link: 'https://maps.app.goo.gl/Q9AKmzKrpgLdS8WY6',
                name: 'Mahanaim CC'
            },
            {
                lat: -6.993900997488179,
                lng: 110.37859701213793,
                link: 'https://maps.app.goo.gl/fzsugxnCGe6AVy958',
                name: 'Sinai CC'
            },
            {
                lat: -7.018796627455877,
                lng: 110.44595025061057,
                link: 'https://maps.app.goo.gl/mkFbUQtsEraCHqiFA',
                name: 'Sion CC'
            }
        ];

        // Menambahkan marker untuk setiap lokasi
        locations.forEach(function(location) {
            var marker = L.marker([location.lat, location.lng]).addTo(map);

            var popupContent = `<a href="${location.link}" target="_blank">${location.name}</a>`;
            marker.bindPopup(popupContent);
        });
    </script>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        navbarToggler.addEventListener('click', function() {

            this.classList.toggle('active');


            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            } else {
                navbarCollapse.classList.add('show');
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</section>