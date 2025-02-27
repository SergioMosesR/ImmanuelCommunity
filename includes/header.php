<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <link rel="icon" href="assets/img/logo.png">
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      overflow-x: hidden;
      padding-top: 6rem;
      /* Sama dengan tinggi navbar */
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

    /* Gaya untuk link aktif */
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


    .navbar-toggler.active {
      background-color: #fff;
      border-radius: 5px;
    }

    .nav-span {
      display: flex;
      overflow-x: auto;
      /* Tambahkan scroll horizontal */
      white-space: nowrap;
      /* Pastikan item tidak wrap ke baris baru */
      justify-content: center;
      /* Awal konten berada di kiri */
      margin: 0;
      padding: 10px 0;
      /* Tambahkan padding agar ada ruang di atas dan bawah */
      background: #333;
      /* Tetap menggunakan warna latar */
    }

    .navbar-span {
      display: inline-flex;
      /* Inline flex agar mendukung scroll horizontal */
      list-style: none;
      gap: 2rem;
      /* Atur jarak antar item */
      padding: 0;
      margin: 0;
    }

    .span-item {
      flex-shrink: 0;
      /* Pastikan item tidak mengecil */
    }

    .span-item a {
      text-decoration: none;
      color: #ffffff;
      padding: 0.5rem 1rem;
      border-radius: 3px;
      font-weight: 500;
      transition: all 0.2s ease-in-out;
      display: inline-block;
    }

    .span-item a:hover {
      background-color: #222;
      color: #e3e3e3;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    }


    @media (max-width: 768px) {
      .nav-span {
        justify-content: flex-start;
        /* Mulai dari kiri */
        overflow-x: auto;
        /* Aktifkan scroll horizontal */
        white-space: nowrap;
        /* Cegah elemen membungkus ke bawah */
        padding: 0.5rem;
      }

      .navbar-span {
        flex-wrap: nowrap;
        /* Elemen tetap dalam satu baris */
        gap: 0.5rem;
        /* Kurangi jarak antar elemen */
      }

      .span-item a {
        padding: 0.5rem 0.8rem;
        /* Sesuaikan ukuran padding */
        font-size: 0.9rem;
        /* Perkecil ukuran font */
      }

      /* Hilangkan Scrollbar */
      .nav-span::-webkit-scrollbar {
        display: none;
        /* Untuk Chrome, Safari */
      }

      .nav-span {
        scrollbar-width: none;
        /* Untuk Firefox */
      }
    }

    .home-section {
      position: relative;
      height: calc(120vh - 6rem);
      width: 100vw;
      overflow: hidden;
    }

    .background-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .welcome-text {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
    }

    .text-center {
      text-align: center;
    }

    .text-white {
      color: #ffffff;
    }

    .display-3 {
      font-size: 3rem;
    }

    .display-4 {
      font-size: 2.5rem;
    }

    .lead {
      font-size: 1.25rem;
    }

    .churches-section {
      font-weight: bold;
    }

    .section-imani {
      position: relative;
      background-image: url('assets/img/pengakuan.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 5rem;
    }

    .section-imani h2 {
      font-size: 3rem;
      font-weight: bold;
      text-align: center;
    }

    .section-imani p {
      font-size: 1.25rem;
      text-align: center;
    }

    .section-imani .btn-opacity {
      display: block;
      margin: 2rem auto;
      background-color: rgba(255, 255, 255, 0.5);
      color: white;
      border: none;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .section-imani .btn-opacity:hover {
      background-color: rgba(255, 255, 255, 0.7);
    }

    .pengakuan-list {
      display: none;
      margin-top: 2rem;
      color: white;
    }

    .pengakuan-list p {
      text-align: left;
      margin-left: 2rem;
    }

    .pengakuan-list ol {
      font-size: 1.25rem;
    }

    .section-lokasi {
      background-color: white;
      color: black;
      padding: 5rem 0;
      text-align: center;
    }

    .section-lokasi h2 {
      font-size: 3rem;
      font-weight: bold;
    }

    .section-lokasi h3 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-top: 1rem;
    }

    .section-lokasi h4 {
      font-size: 2rem;
      font-weight: bold;
      margin-top: 0.5rem;
    }

    .btn-lokasi {
      background-color: black;
      color: white;
      border: none;
      padding: 0.75rem 2rem;
      font-size: 1.25rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 2rem;
    }

    .btn-lokasi:hover {
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

    .footer .contact-info2 {
      margin-top: 2px;
    }

    .footer .contact-info2 p {
      margin-left: 40px;

    }

    .footer .contact-info p {
      margin: 0.25rem 0;
    }

    .footer .contact-info i {
      margin-right: 0.5rem;
    }
  </style>
  <title><?php if(isset($pageTitle)) {echo $pageTitle; }else{ echo 'Immanuel Community Church';} ?></title>
</head>

<body>

<?php include('includes/navbar.php'); ?>