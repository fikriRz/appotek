<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon1.png">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/css/bootstrap.min.css">
    <title><?= $data['judul']; ?></title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-first-aid'></i>
            <span class="logo_name">Myn</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href=" <?= BASEURL; ?>/home">
                    <i class='bx bxs-home'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?= BASEURL; ?>/home">Home</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?= BASEURL; ?>/apoteker">
                        <i class='bx bxs-user'></i>
                        <span class="link_name">apoteker</span>
                    </a>

                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?= BASEURL; ?>/apoteker">Apoteker</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="<?= BASEURL; ?>/obat">
                        <i class='bx bxs-capsule'></i>
                        <span class="link_name">Obat</span>
                    </a>

                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="<?= BASEURL; ?>/obat">Obat</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/transaksi">
                    <i class='bx bx-basket'></i>
                    <span class="link_name">Transaksi</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?= BASEURL; ?>/transaksi">Transaksi</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/laporan">
                    <i class='bx bxs-book-alt'></i>
                    <span class="link_name">Laporan</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?= BASEURL; ?>/laporan">Laporan</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-arrow-to-left'></i>
                        <span class="link_name">Logout</span>
                    </a>

                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Logout</a></li>

                </ul>
            </li>

            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Fikri Rizaldi</div>
                        <div class="job">2020081025</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>

    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <div class="text">Apotek APP</div>
        </div>


        <script type="text/javascript" src="<?= BASEURL; ?>/js/side.js"></script>

        <div class="container">