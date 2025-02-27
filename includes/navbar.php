<nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
    Immanuel Community
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars" style="color: white;"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'church.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="auth/church.php">Churches</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="auth/services.php">Services</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'media.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="auth/media.php">Media</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="auth/contact.php">Contact us</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="../admin/login.php"><i class="bi bi-person-lock"></i></a>
      </li>
    </ul>
  </div>
</nav>

<div style="overflow-x: hidden;">
  <span class="nav-span">
    <ul class="navbar-span">
      <li class="span-item"><a href="auth/gereja/petra.php">Petra</a></li>
      <li class="span-item"><a href="auth/gereja/efrata.php">Efrata</a></li>
      <li class="span-item"><a href="auth/gereja/hermon.php">Hermon</a></li>
      <li class="span-item"><a href="auth/gereja/eben-haezer.php">Eben Haezer</a></li>
      <li class="span-item"><a href="auth/gereja/mahanaim.php">Mahanain</a></li>
      <li class="span-item"><a href="auth/gereja/filadelfia.php">Filadelfia</a></li>
      <li class="span-item"><a href="auth/gereja/karmel.php">Karmel</a></li>
      <li class="span-item"><a href="auth/gereja/sinai.php">Sinai</a></li>
      <li class="span-item"><a href="auth/gereja/kana.php">Kana</a></li>
      <li class="span-item"><a href="auth/gereja/getsemani.php">Getsemani</a></li>
      <li class="span-item"><a href="auth/gereja/sion.php">Sion</a></li>
    </ul>
  </span>
</div>


<?php include "auth/home.php"; ?>