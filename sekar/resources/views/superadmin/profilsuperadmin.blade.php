<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/favicon.png">
</head>
<body>
    <div id="sidebar" class="sidebar">
        <nav class="sidebar-nav">
            <ul>
                <li><a href="/dashboardsuperadmin" class="active"><img src="../assets/dashboard.png" alt="Dashboard Icon"> Dashboard</a></li>
                <li><a href="/dataanggota"><img src="../assets/anggotaabu.png" alt="Anggota Icon"> Data Anggota</a></li>
                <li><a href="/datakeluhan"><img src="../assets/keluhanabu.png" alt="Keluhan Icon"> Data Advokasi/Konsultasi</a></li>
                <li><a href="/dataaspirasi"><img src="../assets/aspirasiabu.png" alt="Aspirasi Icon"> Data Aspirasi</a></li>
                <li><a href="#"><img src="../assets/beritaabu.png" alt="Aspirasi Icon"> Data Berita</a></li>
                <li><a href="#"><img src="../assets/dokumenabu.png" alt="Aspirasi Icon"> Data Dokumen</a></li>
                <li><a href="/"><img src="../assets/keluarabu.png" alt="Keluar Icon"> Keluar</a></li>
            </ul>
        </nav>
    </div>
    <nav class="navbar">
        <div class="navbar-left">
            <button class="menu-btn" onclick="toggleNav()">☰</button>
            <a href="/dashboardsuperadmin" class="logo-link">
                <img src="../assets/sekar.png" alt="Dashboard">
            </a>
        </div>
        <div class="nav-links">
            <a href="#">Tentang Kami</a>
            <a href="#">Berita</a>
            <a href="#">Dokumen</a>
            <a href="#">Media</a>
            <a href="#">Event</a>
            <a href="#">Bakti Bagi Negeri</a>
        </div>
        <a href="/profiladmin" class="logo-link">
            <img src="../assets/ppsuperadmin.png" alt="Login" class="logo-img-profile">
        </a>
    </nav>
    <div class="profil-container">
        <div class="profil-box">
            <div class="profil-header">
                <img src="../assets/sekar2.png" alt="Logo" class="profil-logo">
                <nav class="profil-nav">
                    <ul>
                        <li><a href="/dashboardsuperadmin"><img src="../assets/dashboard.png" alt="Dashboard Icon"> Dashboard</a></li>
                        <li><a href="/dataanggota"><img src="../assets/anggota.png" alt="Dashboard Icon"> Data Anggota</a></li>
                        <li><a href="/datakeluhan"><img src="../assets/keluhan.png" alt="Keluhan Icon"> Data Advokasi/Konsultasi</a></li>
                        <li><a href="/dataaspirasi"><img src="../assets/aspirasi.png" alt="Aspirasi Icon"> Data Aspirasi</a></li>
                        <li><a href="#"><img src="../assets/berita.png" alt="Berita Icon"> Data Berita</a></li>
                        <li><a href="#"><img src="../assets/dokumen.png" alt="Dokumen Icon"> Data Dokumen</a></li>
                        <li><a href="/"><img src="../assets/keluar.png" alt="Keluar Icon"> Keluar</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="profil-content">
                <div class="profil-section">
                    <div class="profil-info-left">
                        <div class="profil-picture">
                            <img src="../assets/ppsuperadmin.png" alt="Profile Picture">
                        </div>
                        <div class="profil-details">
                            <div class="profil-details-item">
                                <h3>Nama Super Admin</h3>
                                <p>Super Admin</p>
                            </div>
                            <div class="profil-contact">
                                <div class="profil-contact-item">
                                    <strong>Nomor Telepon</strong>
                                    <p>08212345678</p>
                                </div>
                                <div class="profil-contact-item">
                                    <strong>Lokasi Bekerja</strong>
                                    <p>Bandung</p>
                                </div>
                            </div>
                        </div>
                        <div class="profil-info-right">
                            <div class="profil-icons">
                                <a href="/approve">
                                    <img src="../assets/approve.png" alt="Approve Icon" class="icon">
                                </a>
                                <img src="../assets/kartu.png" alt="ATM Icon" class="icon">
                                <img src="../assets/keluaritem.png" alt="Keluar Icon" class="icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profil-section">
                    <h3>Histori Iuran</h3>
                    <div class="profil-info-horizontal">
                        <div class="profil-info-item">
                            <p><strong>Tanggal Update:</strong></p>
                            <p>2024-05-01</p>
                        </div>
                        <div class="profil-info-item">
                            <p><strong>Iuran Per Bulan:</strong></p>
                            <p>Rp 25.000</p>
                        </div>
                    </div>
                </div>
                <div class="profil-section">
                    <h3>Ubah Iuran Sukarela</h3>
                    <div class="profil-info-horizontal">
                        <div class="profil-info-item">
                            <p><strong>Tanggal Update:</strong></p>
                            <p>2024-05-01</p>
                        </div>
                        <div class="profil-info-item">
                            <p><strong>Iuran Wajib:</strong></p>
                            <p>Rp 25.000</p>
                        </div>
                        <div class="profil-info-item">
                            <p><strong>Iuran Sukarela:</strong></p>
                            <input type="text" id="iuran-sukarela" name="iuran-sukarela" value="Rp 50.000">
                        </div>
                        <div class="profil-info-item profil-button-container">
                            <button type="submit" class="ubah-button">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-bottom">
            <p>© 2024 Copyright by Sekar Telkom Indonesia. All rights reserved.</p>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
