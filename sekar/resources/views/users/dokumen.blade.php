<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/favicon.png">
</head>
<body>
    <x-navbar-users></x-navbar-users>
    <div class="main-body">
        <header>
            <h1>Dokumen</h1>
            <nav class = "button">
                <button id="dok1-btn" class="active">Peraturan ketenagakerjaan</button>
                <button id="dok2-btn">PKB</button>
                <button id="dok3-btn">Dokumen Umum</button>
                <button id="dok4-btn">Dokumen Internal</button>
            </nav>
        </header>
        <main>
            <div id="dok1" class="content active">
                <h2>Peraturan Ketenagakerjaan</h2>
                <p>Ini adalah konten Peraturan Ketenagakerjaan.</p>
            </div>
            <div id="dok2" class="content">
                <h2>PKB</h2>
                <p>Ini adalah konten PKB.</p>
            </div>
            <div id="dok3" class="content">
                <h2>Dokumen Umum</h2>
                <p>Ini adalah konten dokumen umum.</p>
            </div>
            <div id="dok4" class="content">
                <h2>Dokumen Internal</h2>
                <p>Ini adalah konten dokumen internal.</p>
            </div>
        </main>
    </div>
    <div class="footer">
    <img src="../assets/bottom.png" alt="Footer Image" class="footer-image">
    <div class="footer-content">
        <div class="footer-section">
            <p><strong>Didukung oleh:</strong></p>
            <img src="../assets/telkom.png" alt="Telkom Logo" class="footer-logo">
        </div>
        <div class="footer-section">
            <p><strong>Links:</strong></p>
            <a href="#">Tentang Kami</a>
            <a href="#">Berita</a>
            <a href="#">Media</a>
            <a href="#">Event</a>
            <a href="#">Bakti Pada Negeri</a>
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

<script src="../js/script.js"></script>
</body>
</html>