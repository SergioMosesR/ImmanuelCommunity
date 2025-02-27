<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Security-Policy"
        content="script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.gstatic.com https://apis.google.com https://accounts.google.com https://code.jquery.com https://cdn.jsdelivr.net;
        object-src 'none';">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Renungan & Kesaksian - Komunitas Immanuel</title>

    <!-- Google API Scripts -->
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>

<style>
    body {
        background: url('../assets/img/renungan.jpg') no-repeat center center fixed;
        background-size: cover;
        background-position: center;
        font-family: 'Arial', sans-serif;
    }

    .custom-navbar {
        height: 6rem;
        background-color: #000000 !important;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .custom-navbar .navbar-brand {
        display: flex;
        align-items: center;
        font-weight: bold;
        font-size: 24px;
    }

    .custom-navbar .navbar-brand img {
        margin-right: 0.75rem;
    }

    .navbar-collapse {
        background-color: #000000;
        padding: 10px;
        border-radius: 10px;
    }

    .custom-navbar .nav-link {
        color: #ffffff !important;
        margin: 0 1.5rem;
        font-weight: bold;
        transition: color 0.3s;
    }

    .custom-navbar .nav-link:hover {
        color: #f0ad4e !important;
    }

    .content-container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        margin: 120px auto;
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        max-width: 85%;
        text-align: center;
    }

    h2, p {
        margin-bottom: 20px;
    }

    .pdf-sections {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 30px;
    }

    .pdf-section {
        flex: 1 1 calc(45% - 20px);
        background-color: #ffffff;
        padding: 15px;
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .pdf-section:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
    }

    .section-title {
        font-size: 22px;
        color: #333;
        margin-bottom: 15px;
        border-bottom: 2px solid #f0ad4e;
        display: inline-block;
        padding-bottom: 5px;
    }

    @media (max-width: 768px) {
        .pdf-section {
            flex: 1 1 100%;
        }
    }
</style>

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


    <div class="content-container">
        <h2>Selamat Datang di Komunitas Immanuel</h2>
        <p>Halaman ini menyajikan renungan dan kesaksian yang penuh inspirasi dan pesan rohani.</p>

        <div class="pdf-sections">
            <div class="pdf-section">
                <h3 class="section-title">Renungan Harian</h3>
                <div id="renungan-container"></div>
            </div>

            <div class="pdf-section">
                <h3 class="section-title">Kesaksian Hidup</h3>
                <div id="kesaksian-container"></div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    const KONFIGURASI = {
        renungan: {
            folderId: '10dC80C3euqCwrmiobwumYYg4aTeQKASW',
            containerId: 'renungan-container'
        },
        kesaksian: {
            folderId: '1rnJCIUw4p9X1R5oDxgZxK0PGhJBNf1Ev',
            containerId: 'kesaksian-container'
        }
    };

    const CLIENT_ID = '518088352174-nb9mlt3n8jvkv4sh9lne5lhbuaou6j0i.apps.googleusercontent.com';
    const API_KEY = 'AIzaSyBS8xIJKeF81baB6GZfBK6mpZF_xARg3yk';

    function inisialisasiClient() {
        gapi.client.init({
            apiKey: API_KEY,
            discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest'],
        }).then(() => {
            google.accounts.id.initialize({
                client_id: CLIENT_ID,
                callback: tanganiResponsKredensial,
                auto_select: true
            });

            google.accounts.id.prompt((notifikasi) => {
                if (notifikasi.isNotDisplayed() || notifikasi.isSkippedMoment()) {
                    console.log('Prompt tidak ditampilkan atau dilewati, memuat data tanpa login.');
                    tampilkanFile(KONFIGURASI.renungan);
                    tampilkanFile(KONFIGURASI.kesaksian);
                }
            });
        }).catch((error) => {
            console.error('Kesalahan saat inisialisasi GAPI client:', error);
        });
    }

    function tanganiResponsKredensial(response) {
        const kredensialTerdekode = parseJwt(response.credential);
        const tokenAkses = kredensialTerdekode.access_token;

        gapi.client.setToken({
            access_token: tokenAkses
        });

        tampilkanFile(KONFIGURASI.renungan);
        tampilkanFile(KONFIGURASI.kesaksian);
    }

    function parseJwt(token) {
        const base64Url = token.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        const jsonPayload = decodeURIComponent(atob(base64).split('').map(function (c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
        return JSON.parse(jsonPayload);
    }

    function tampilkanFile(config) {
        gapi.client.drive.files.list({
            q: `'${config.folderId}' in parents and mimeType='application/pdf' and trashed = false`,
            orderBy: 'modifiedTime desc',
            fields: 'files(id, name)',
            pageSize: 1
        }).then(response => {
            const files = response.result.files;
            const container = document.getElementById(config.containerId);

            if (files && files.length > 0) {
                const file = files[0];
                const fileUrl = `https://drive.google.com/file/d/${file.id}/preview`;

                container.innerHTML = `
                    <iframe src="${fileUrl}" width="100%" height="600" style="border: none; border-radius: 10px;"></iframe>
                    <p style="text-align: center; margin-top: 10px;">
                        <a href="https://drive.google.com/drive/folders/${config.folderId}" target="_blank">Lihat Semua File 📂</a>
                    </p>
                `;
            } else {
                container.innerHTML = '<p>Tidak ada file ditemukan.</p>';
            }
        }).catch(error => {
            console.error('Kesalahan saat mengambil file:', error);
            const container = document.getElementById(config.containerId);
            container.innerHTML = '<p>Terjadi kesalahan saat memuat file.</p>';
        });
    }

    gapi.load('client', inisialisasiClient);
</script>

</body>

</html>
