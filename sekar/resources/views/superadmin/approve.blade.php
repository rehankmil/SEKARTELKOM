<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Unggah</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/favicon.png">
</head>
<body>
    <div id="sidebar" class="sidebar">
        <nav class="sidebar-nav">
            <ul>
                <li><a href="/dashboardsuperadmin"><img src="../assets/dashboardabu.png" alt="Dashboard Icon"> Dashboard</a></li>
                <li><a href="/dataaanggota" ><img src="../assets/anggotaabu.png" alt="Anggota Icon">Data Anggota</a></li>
                <li><a href="/datakeluhan" ><img src="../assets/keluhanabu.png" alt="Keluhan Icon">Data Advokasi/Konsultasi</a></li>
                <li><a href="/dataaspirasi" class="active"><img src="../assets/aspirasi.png" alt="Aspirasi Icon">Data Aspirasi</a></li>
                <li><a href="/"><img src="../assets/keluarabu.png" alt="Keluar Icon"> Keluar</a></li>
            </ul>
        </nav>
    </div>
    <nav class="navbar">
        <div class="navbar-left">
            <button class="menu-btn" onclick="toggleNav()">☰</button>
            <a href="\dashboardsuperadmin" class="logo-link">
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
        <a href="\profilsuperadmin" class="logo-link">
            <img src="../assets/ppsuperadmin.png" alt="Login" class="logo-img-profile">
        </a>
    </nav>
    <div class="data-container">
        <div class="data-box">
            <div class="data-header">
                <h2>PERSETUJUAN UNGGAH</h2>
                <img src="../assets/sekar2.png" alt="Logo" class="data-logo">
            </div>
            <div class="data-content">
            <nav class = "button">
                <button class="active">Semua</button>
                <button>Berita</button>
                <button>Dokumen</button>
            </nav>
            <br><br>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Lampiran</th>
                            <th>Tanggal</th>
                            <th colspan="2">Persetujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dokumen</td>
                            <td>Panduan Keanggotaan SEKAR</td>
                            <td>-</td>
                            <td><a href="#">Lihat Lampiran</a></td>
                            <td>2024-05-01</td>
                            <td><button>Setuju</button></td>
                            <td><button>Tolak</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dokumen</td>
                            <td>Surat PKB</td>
                            <td>-</td>
                            <td><a href="#">Lihat Lampiran</a></td>
                            <td>2024-05-02</td>
                            <td><button>Setuju</button></td>
                            <td><button>Tolak</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Berita</td>
                            <td>SEKAR Kritisi Pengalihan Aset</td>
                            <td>Menanggapi situasi yang berkembang perihal....</td>
                            <td><a href="#">Lihat Lampiran</a></td>
                            <td>2024-05-03</td>
                            <td><button>Setuju</button></td>
                            <td><button>Tolak</button></td>
                        </tr>
                    </tbody>
                </table>
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
