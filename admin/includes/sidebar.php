<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="index.php">
            <img src="assets/img/logo.png" class="navbar-brand-img h-100" alt="logo_immanuel">
            <span class="ms-1 font-weight-bold">Immanuel Community</span>
        </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php" id="dashboard-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- Pengguna -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Akses</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php" id="users-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pengguna</span>
                </a>
            </li>

            <!-- Pengaturan -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengaturan</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="notif.php" id="notif-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-bell text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Notifikasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home.php" id="home-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>

            <!-- Churches -->
            <li class="nav-item">
                <a class="nav-link" href="#churchesSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" id="churches-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-church text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Churches</span>
                    <i class="fa fa-chevron-down ms-auto text-white"></i>
                </a>
                <div class="collapse" id="churchesSubmenu">
                    <ul class="nav nav-sm flex-column ms-4">
                        <li class="nav-item">
                            <a class="nav-link" href="petra.php">Petra</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="efrata.php">Efrata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hermon.php">Hermon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eben.php">Eben</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mahanaim.php">Mahanaim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="filadelfia.php">Filadelfia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="karmel.php">Karmel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sinai.php">Sinai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kana.php">Kana</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="getsemani.php">Getsemani</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sion.php">Sion</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Services -->
            <li class="nav-item">
                <a class="nav-link" href="#servicesSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" id="services-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-cogs text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Services</span>
                    <i class="fa fa-chevron-down ms-auto text-white"></i>
                </a>
                <div class="collapse" id="servicesSubmenu">
                    <ul class="nav nav-sm flex-column ms-4">
                        <li class="nav-item">
                            <a class="nav-link" href="kids.php">Kids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="youth.php">Youth-Star Generation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="professional.php">Professional</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sunday.php">Sunday Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="elder.php">Elder Service</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="media.php" id="media-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-photo-video text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Media</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php" id="contact-link">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-envelope text-white text-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Contact Us</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidenav-footer mx-3">
        <a class="btn btn-primary mt-7 w-100" href="logout.php">
            Logout
        </a>
    </div>
</aside>

<!-- Add the CSS -->
<style>
    /* Highlight active link */
    .nav-link.active {
        background-color: #007bff; /* Change to your desired active background color */
        color: white;
        border-radius: 8px;
    }

    .nav-link {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Submenu style */
    .nav-item .nav-sm .nav-link {
        padding-left: 2rem;
        font-size: 0.875rem;
        transition: all 0.3s ease;
    }

    .nav-item .nav-sm .nav-link:hover {
        color: #007bff;
        font-weight: bold;
    }
</style>

<!-- Add the JavaScript -->
<script>
    // Toggle active class
    document.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', function (event) {
            document.querySelectorAll('.nav-link').forEach(function (item) {
                item.classList.remove('active');
            });
            event.target.closest('.nav-link').classList.add('active');
        });
    });

    // Optional: Toggle sidebar visibility
    document.getElementById('iconSidenav').addEventListener('click', function() {
        document.getElementById('sidenav-main').classList.toggle('d-none');
    });
</script>
