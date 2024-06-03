<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi dan Advokasi</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/favicon.png">
</head>
<body>
    <div id="sidebar" class="sidebar">
        <nav class="sidebar-nav">
            <ul>
                <li><a href="/dashboard" class="active"><img src="../assets/dashboard.png" alt="Dashboard Icon"> Dashboard</a></li>
                <li><a href="/keluhan"><img src="../assets/keluhanabu.png" alt="Keluhan Icon"> Advokasi/Konsultasi</a></li>
                <li><a href="/aspirasi"><img src="../assets/aspirasiabu.png" alt="Aspirasi Icon"> Aspirasi</a></li>
                <li><a href="/kartu"><img src="../assets/kartuabu.png" alt="Kartu Icon"> Kartu Anggota</a></li>
                <li><a href="/"><img src="../assets/keluarabu.png" alt="Keluar Icon"> Keluar</a></li>
            </ul>
        </nav>
    </div>
    <nav class="navbar">
        <div class="navbar-left">
            <button class="menu-btn" onclick="toggleNav()">☰</button>
            <a href="/dashboard" class="logo-link">
                <img src="../assets/sekar.png" alt="Dashboard">
            </a>
        </div>
        <div class="nav-links">
            <a href="/tentangkami">Tentang Kami</a>
            <a href="/berita">Berita</a>
            <a href="/dokumen">Dokumen</a>
            <a href="/media">Media</a>
            <a href="/event">Event</a>
            <a href="/bakti">Bakti Bagi Negeri</a>
        </div>
        <a href="/profil" class="logo-link">
            <img src="../assets/ppanggota.png" alt="Login" class="logo-img-profile">
        </a>
    </nav>

    <div id="sidebar" class="sidebar">
        <a href="#">Tentang Kami</a>
        <a href="#">Berita</a>
        <a href="#">Dokumen</a>
        <a href="#">Media</a>
        <a href="#">Event</a>
        <a href="#">Bakti Pada Negeri</a>
    </div>

    <div class="main-body">
        <div class="fitur-container">
            <div class="fitur-box">
                <div class="fitur-header">
                    <a href="/dashboard">
                        <img src="../assets/sekar2.png" alt="Logo Perusahaan" class="fitur-logo">
                    </a>
                    <h2>ADVOKASI KONSULTASI</h2>
                </div>
                <div class="fitur-form">
                        <form>
                            <label for="topik">Topik</label>
                            <select id="topik" class="fitur-input">
                                <option value="remunerasi">Remunerasi</option>
                                <option value="hubungan-atasan-bawahan">Hubungan atasan/bawahan</option>
                                <option value="disiplin-karyawan">Disiplin karyawan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        
                        <label for="tujuan">Tujuan</label>
                        <div class="fitur-radio-group">
                            <input type="radio" id="dpp" name="tujuan" value="dpp" onclick="handleTujuanChange(event)">
                            <label for="dpp">DPP</label>
                            <input type="radio" id="dpd" name="tujuan" value="dpd" onclick="handleTujuanChange(event)">
                            <label for="dpd">DPD</label>
                            <input type="radio" id="dpw" name="tujuan" value="dpw" onclick="handleTujuanChange(event)">
                            <label for="dpw">DPW</label>
                        </div>
                        
                        <div id="dpd-dropdown" class="hidden">
                            <label for="dpd">DPD</label>
                            <select id="dpd" class="fitur-input">
                                <option value="daerah1">Daerah 1</option>
                                <option value="daerah2">Daerah 2</option>
                                <option value="daerah3">Daerah 3</option>
                                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                            </select>
                        </div>
                        
                        <div id="dpw-dropdown" class="hidden">
                            <label for="dpw">DPW</label>
                            <select id="dpw" class="fitur-input">
                                <option value="kota1">Kota 1</option>
                                <option value="kota2">Kota 2</option>
                                <option value="kota3">Kota 3</option>
                                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                            </select>
                        </div>
                        
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="fitur-input" rows="5" placeholder="Masukkan deskripsi"></textarea>
                        
                        <button type="submit" class="fitur-btn">Kirim</button>
                    </form>
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
