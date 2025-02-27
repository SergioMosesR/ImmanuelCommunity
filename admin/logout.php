<?php 
require '../config/fungsi.php';

// Mulai sesi jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Periksa apakah pengguna sudah login
if (isset($_SESSION['auth'])) {
    // Fungsi untuk logout
    logoutSession();
    
    // Arahkan ke halaman login
    redirect('../login.php', 'Logout Sukses');
} else {
    // Jika tidak ada sesi aktif, langsung arahkan ke login
    redirect('../login.php', 'Anda belum login.');
}
?>
