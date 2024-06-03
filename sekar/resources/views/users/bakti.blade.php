<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakti Pada Negeri</title>
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
            <a href="/bakti">Bakti Pada Negeri</a>
        </div>
        <a href="/profil" class="logo-link">
            <img src="../assets/ppanggota.png" alt="Login" class="logo-img-profile">
        </a>
    </nav>
    <div class="main-body">
        <header>
            <h1>Bakti Bagi Negeri</h1>
            <nav class = "button">
                <button id="profile-btn" class="active">Bakti Bagi Negeri</button>
                <button id="visi-misi-btn">Yayasan Sekar Telkom</button>
            </nav>
        </header>
        <main>
            <div id="profile" class="content active">
                <div class="profile-content">
                    <div class="profile-text">
                        <!-- <h2>profile</h2> -->
                        <p>TELKOM dikenal dengan baik oleh masyarakat sebagai BUMN yang bonafid dan senantiasa mampu menyediakan infrastruktur dan jasa di bidang telekomunikasi. TELKOM juga merupakan perusahaan yang taat terhadap norma Good Corporate Governance, salah satunya dengan penyelenggaraan program-program Corporate Social Responsibility (CSR). Pada bidang pendidikan, TELKOM pun berkiprah mengembangkan Telkom University yang dapat dinikmati oleh semua kalangan masyarakat Indonesia.</p>
                        <p>Kendati upaya TELKOM untuk turut memajukan kehidupan bangsa sudah tergolong lebih dari cukup, akan tetapi pada kenyataannya kenikmatan tersebut belum sepenuhnya menular ke daerah-daerah pelosok Indonesia. Keberadaan mereka yang lekat dengan kekurangan dalam hal mengakses informasi, minimnya ilmu pengetahuan dan keterbatasan menikmati sarana prasarana pendidikan, masih perlu menjadi perhatian semua kalangan dan komponen bangsa ini.</p>
                        <p>Maka dari itu, SEKAR TELKOM bekerjasama dengan Relawan Bakti Bagi Negeri (BBN) menerjunkan gelombang aksi nyata “Gerakan ½ Juta Buku untuk Anak-anak Indonesia”. Gerakan tersebut telah berhasil mendistribusikan lebih dari 67.000 buku-buku ke sekolah dasar di 23 daerah pelosok Indonesia. Seluruh laporan dan artikel terkait pendistribusian tersebut dapat diakses di <a href="www.baktibaginegeri.org">www.baktibaginegeri.org</a>.</p>
                        <p>Mencapai target 500.000 buku hingga tahun 2017 bukan perjuangan mudah. Namun dengan semangat “Bakti Bagi Negeri, Tak Ada Kata ‘Tuk Berhenti”, SEKAR TELKOM dan Relawan BBN terus melakukan usaha terbaik untuk memastikan buku-buku tersebut sampai di tangan anak-anak Indonesia yang membutuhkan.</p>
                    </div>
                </div>
            
            </div>
            <div id="visi-misi" class="content">
                <!-- <h2>Visi </h2> -->
                <p>Yayasan Sekar Telkom telah berdiri sejak tahun 2007 dengan kegiatan bidang sosial dan pendidikan. Kegiatan yang telah dilaksanakan adalah membantu anak-anak korban bencana tsunami Aceh tahun 2004. Setelah kegiatan tersebut selesai, Yayasan Sekar menyelenggarakan Pendidikan Anak Usia Dini.</p>
                <p>Untuk informasi lebih lanjut mengenai kegiatan Yayasan Sekar Telkom dan rekening donasi dapat mengunjungi <a href="https://mrezaprwr.wixsite.com/yayasansekar/">https://mrezaprwr.wixsite.com/yayasansekar/</a>.</p> 
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