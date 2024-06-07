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
    <x-navbar-users></x-navbar-users>
    <div class="profil-container">
        <div class="profil-box">
            <div class="profil-header">
                <img src="../assets/sekar2.png" alt="Logo" class="profil-logo">
                <nav class="profil-nav">
                    <ul>
                        <li><a href="/dashboard"><img src="../assets/dashboard.png" alt="Dashboard Icon"> Dashboard</a></li>
                        <li><a href="/keluhan"><img src="../assets/keluhan.png" alt="Keluhan Icon"> Advokasi/Konsultasi</a></li>
                        <li><a href="/aspirasi"><img src="../assets/aspirasi.png" alt="Aspirasi Icon"> Aspirasi</a></li>
                        <li><a href="/logout"><img src="../assets/keluar.png" alt="Keluar Icon"> Keluar</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="profil-content">
                <div class="profil-section">
                    <div class="profil-info-left">
                        <div class="profil-picture">
                            <img src="../assets/ppanggota.png" alt="Profile Picture">
                        </div>
                        <div class="profil-details">
                            <div class="profil-details-item">
                                <h3>Nama Anggota</h3>
                                <p>{{ Auth::user()->nama }}</p>
                            </div>
                            <div class="profil-contact">
                                <div class="profil-contact-item">
                                    <strong>Posisi</strong>
                                    <p>{{ Auth::user()->posisi->nama_posisi }}</p> <!-- Asumsi nama kolom posisi -->
                                </div>
                                <div class="profil-contact-item">
                                    <strong>Nomor Telepon</strong>
                                    <p>{{ Auth::user()->no_telp }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="profil-info-right">
                            <div class="profil-icons">
                                <a href="javascript:void(0);" onclick="showPopup()">
                                    <img src="../assets/kartu.png" alt="ATM Icon" class="icon">
                                </a>
                                <img src="../assets/keluaritem.png" alt="Edit Icon" class="icon">
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
    <!-- Popup for the card -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <img src="../assets/kartubaru.png" alt="New Card">
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
