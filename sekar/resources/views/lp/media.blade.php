<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/favicon.png">
</head>
<body>
    <x-navbar-landingpage></x-navbar-landingpage>
    <div class="main-body">
            <header>
                <h1>Media Sekar</h1>
            </header>
            <div class="media-container">
                <section class="highlight-section">
                    <div class="highlight-content">
                        <div class="highlight-text">
                            <h2 id="highlight-title">Dokumen Kegiatan 1</h2>
                            <p id="highlight-description">Deskripsi singkat dokumen kegiatan 1.</p>
                        </div>
                        <div class="highlight-image-container">
                            <div class="highlight-item active">
                                <img src="../assets/berita3.png" alt="Highlight 1">
                            </div>
                            <div class="highlight-item">
                                <img src="../assets/berita2.png" alt="Highlight 2">
                            </div>
                            <!-- Tambahkan highlight-item lainnya di sini -->
                            <button class="arrow left-arrow" onclick="prevHighlight()">&#9664;</button>
                            <button class="arrow right-arrow" onclick="nextHighlight()">&#9654;</button>
                        </div>
                    </div>
                </section>
                <section class="gallery-section"> <br><br>
                    <h2>Galeri Foto</h2> <br>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="../assets/berita1.png" alt="Gallery Image 1">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita2.png" alt="Gallery Image 2">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita1.png" alt="Gallery Image 1">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita2.png" alt="Gallery Image 2">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita1.png" alt="Gallery Image 1">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita2.png" alt="Gallery Image 2">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita1.png" alt="Gallery Image 1">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita2.png" alt="Gallery Image 2">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita1.png" alt="Gallery Image 2">
                        </div>
                        <div class="gallery-item">
                            <img src="../assets/berita2.png" alt="Gallery Image 2">
                        </div>
                        <!-- Tambahkan foto galeri lainnya di sini -->
                    </div>
                </section>
            </div>
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