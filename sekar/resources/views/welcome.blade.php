<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/favicon.png">
</head>
<body>
    <div id="sidebar" class="sidebar">
        <nav class="sidebar-nav">
            <ul>
                <li><a href="/" class="active"><img src="../assets/dashboard.png" alt="Dashboard Icon"> Dashboard</a></li>
                <li><a href="/login"><img src="../assets/keluhanabu.png" alt="Keluhan Icon"> Advokasi/Konsultasi</a></li>
                <li><a href="/login"><img src="../assets/aspirasiabu.png" alt="Aspirasi Icon"> Aspirasi</a></li>
            </ul>
        </nav>
    </div>
    <x-navbar-landingpage></x-navbar-landingpage>
    <div class="main-body">
        <div class="news-wrapper">
        <div class="news-section">
            <div class="news-main">
                <div class="news-item large">
                    <img src="../assets/berita1.png" alt="Large News Image" class="news-image">
                    <div class="news-content">
                        <h3>Sekar Kritisi Pengalihan Aset Infrastruktur Network</h3>
                        <div class="news-meta">Tanggal dan Kategori</div>
                        <div class="news-summary">
                            Menanggapi situasi yang berkembang perihal Transformasi 5 Bold Moves yang dilakukan
                                            PT.Telkom sebagai upaya untuk menumbuhkan perusahaan, dan salah satu strategi yang akan 
                                            dilakukan adalah pembentukan infraco (PT.Telkom Infratruktur Indonesia) dengan akan melakukan 
                                            transfer aset infrastruktur PT.Telkom ke dalam anak perusahaan tersebut. 
                                            Sehubungan dengan hal tsb, Sekar Telkom telah melakukan beberapa kali audiensi dengan 
                                            Manajemen PT. Telkom (Direksi) dan kami juga telah beberapa kali menyampaikan masukan dan 
                                            aspirasi Karyawan kepada Manajemen (Direksi dan Dewan Komisaris), namun belum menemui kesepahaman. <br><br>
                        <a href="#">Baca selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-sidebar">
                <div class="news-item small">
                    <img src="../assets/berita2.png" alt="Small News Image 1" class="news-image">
                    <div class="news-content">
                        <h3>HUT Sekar Telkom ke-21 : Ready for DigiTelco Transformation in Next Normal Era</h3>
                        <div class="news-meta">Tanggal dan Kategori</div>
                    </div>
                </div>
                <div class="news-item small">
                    <img src="../assets/berita3.png" alt="Small News Image 2" class="news-image">
                    <div class="news-content">
                        <h3>Penandatanganan PKB VIII</h3>
                        <div class="news-meta">Tanggal dan Kategori</div>
                    </div>
                </div>
                <div class="news-item small">
                    <img src="../assets/evaluasi_program_walipohon.jpeg" alt="Small News Image 3" class="news-image">
                    <div class="news-content">
                        <h3>Evaluasi Program Walipohon</h3>
                        <div class="news-meta">Tanggal dan Kategori</div>
                    </div>
                </div>
                <div class="news-item small">
                    <img src="../assets/bbn_kal.jpeg" alt="Small News Image 4" class="news-image">
                    <div class="news-content">
                        <h3>Direksi Telkom Sumbang BBN 5000 buah buku</h3>
                        <div class="news-meta">Tanggal dan Kategori</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="footer">
    <img src="assets/bottom.png" alt="Footer Image" class="footer-image">
    <div class="footer-content">
        <div class="footer-section">
            <p><strong>Didukung oleh:</strong></p>
            <img src="assets/telkom.png" alt="Telkom Logo" class="footer-logo">
        </div>
        <div class="footer-section">
            <p><strong>Links:</strong></p>
            <a href="#">Tentang Kami</a>
            <a href="#">Berita</a>
            <a href="#">Media</a>
            <a href="#">Event</a>
            <a href="#">Bakti Bagi Negeri</a>
        </div>
        <div class="footer-section">
            <p><strong>Contact Us:</strong></p>
            <p>
                Graha Merah Putih Lt 4 Jalan Japati<br>
                No. 1 Bandung 40111<br>
                022-4524110/4114
            </p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 Copyright by Sekar Telkom Indonesia. All rights reserved.</p>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
