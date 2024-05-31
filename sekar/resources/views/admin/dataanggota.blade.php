<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/favicon.png">
</head>
<body>
    <div id="sidebar" class="sidebar">
        <nav class="sidebar-nav">
            <ul>
                <li><a href="/dashboardadmin"><img src="../assets/dashboardabu.png" alt="Dashboard Icon"> Dashboard</a></li>
                <li><a href="/dataaanggota"><img src="../assets/anggotaabu.png" alt="Anggota Icon"> Data Anggota</a></li>
                <li><a href="/datakeluhan"><img src="../assets/keluhanabu.png" alt="Keluhan Icon"> Data Advokasi/Konsultasi</a></li>
                <li><a href="/dataaspirasi"><img src="../assets/aspirasiabu.png" alt="Aspirasi Icon"> Data Aspirasi</a></li>
                <li><a href="/"><img src="../assets/keluarabu.png" alt="Keluar Icon"> Keluar</a></li>
            </ul>
        </nav>
    </div>
    <nav class="navbar">
        <div class="navbar-left">
            <button class="menu-btn" onclick="toggleNav()">☰</button>
            <a href="/dashboardadmin" class="logo-link">
                <img src="../assets/sekar.png" alt="Dashboard">
            </a>
        </div>
        <div class="nav-links">
            <a href="#">Tentang Kami</a>
            <a href="#">Berita</a>
            <a href="#">Dokumen</a>
            <a href="#">Media</a>
            <a href="#">Event</a>
            <a href="#">Bakti Pada Negeri</a>
        </div>
        <a href="/profiladmin" class="logo-link">
            <img src="../assets/admin.jpg" alt="Login" class="logo-img-profile">
        </a>
    </nav>
    <div class="data-container">
        <div class="data-box">
            <div class="data-header">
                <h2>DATA ANGGOTA</h2>
                <img src="../assets/sekar2.png" alt="Logo" class="data-logo">
            </div>
            <div class="data-content">
                <div class="stats-container">
                    <div class="stat-box">
                        <div class="stat-text">
                            <h3>Anggota Aktif</h3>
                            <p>5.546</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../assets/grupijo.png" alt="Grup Icon">
                        </div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-text">
                            <h3>Anggota Keluar</h3>
                            <p>2</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../assets/grupitem.png" alt="Grup Icon">
                        </div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-text">
                            <h3>Non Anggota</h3>
                            <p>2106</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../assets/gruporen.png" alt="Grup Icon">
                        </div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-text">
                            <h3>Anggota Pengurus</h3>
                            <p>142</p>
                        </div>
                        <div class="stat-icon">
                            <img src="../assets/grupbiru.png" alt="Grup Icon">
                        </div>
                    </div>
                </div>
                <div class="filter-container">
                    <h3>Filter by DPW</h3>
                    <form class="filter-form">
                        <label for="dpw">DPW:</label>
                        <select id="dpw" class="filter-input">
                            <option value="dpw1">DPW 1</option>
                            <option value="dpw2">DPW 2</option>
                            <option value="dpw3">DPW 3</option>
                        </select>
                        <label for="dpd">DPD:</label>
                        <select id="dpd" class="filter-input">
                            <option value="dpd1">DPD 1</option>
                            <option value="dpd2">DPD 2</option>
                            <option value="dpd3">DPD 3</option>
                        </select>
                        <button type="submit" class="filter-btn">Submit</button>
                    </form>
                </div>
                <div class="table-container">
                    <table class="anggota-table">
                        <thead>
                            <tr>
                                <th>DPW</th>
                                <th>DPD</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DPW 1</td>
                                <td>DPD 1</td>
                                <td>113</td>
                            </tr>
                            <tr>
                                <td>DPW 2</td>
                                <td>DPD 2</td>
                                <td>103</td>
                            </tr>
                            <tr>
                                <td>DPW 3</td>
                                <td>DPD 3</td>
                                <td>94</td>
                            </tr>
                        </tbody>
                    </table>
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
