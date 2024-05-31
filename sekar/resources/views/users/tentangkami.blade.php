<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
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
            <img src="../assets/pp.jpg" alt="Login" class="logo-img-profile">
        </a>
    </nav>
    <div class="main-body">
        <header>
            <h1>Tentang Kami</h1>
            <nav class = "button">
                <button id="profile-btn" class="active">Profil dan Sejarah</button>
                <button id="visi-misi-btn">Visi dan Misi</button>
                <button id="struktur-btn">Struktur Kepengurusan</button>
            </nav>
        </header>
        <main>
            <div id="profile" class="content active">
                <div class="profile-content">
                    <div class="profile-text">
                        <h2>Profil</h2>
                        <p>Kelahiran Serikat Karyawan PT Telekomunikasi Indonesia, Tbk atau disingkat Sekar TELKOM tidak dapat dipisahkan dari bergulirnya era reformasi pada medio 1998 , era demokrasi dan era kebebasan berkumpul dan berserikat.</p>

                        <p>Pembubaran Korps Pegawai Republik Indonesia atau KORPRI PT TELKOM pada tahun 1999 mengawali perjalanan bersejarah lahirnya Sekar TELKOM. Pada akhir  Februari 2000, segenap karyawan TELKOM dari seluruh unit kerja di seluruh Indonesia berkumpul di Bandung melaksanakan Musyawarah Karyawan (MUKAR) pembentukan wadah bersatunya karyawan. Sebelum itu, embrio sangat awal dari Sekar Telkom merupakan hasil inisiatif dari segenap karyawan di Kalimantan dalam wadah Serikat Pekerja Telkom Kalimantan (SPTK) pada tahun 1999.</p>
                        
                        <p>Pada awal kelahirannya nama yang disetujui adalah Paguyuban Karyawan TELKOM (PAKAR). Namun demikian aspirasi dan kebulatan tekad wakil-wakil karyawan yang hadir pada MUKAR tersebut, akhirnya menyepakati sebuah bentuk organisasi wadah karyawan dengan nama Serikat Karyawan PT Telekomunikasi Indonesia,Tbk atau disingkat Sekar TELKOM. Kesepakatan membentuk Sekar TELKOM diambil pada tanggal 29 Februari 2000, namun Musyawarah Karyawan mendeklarasi berdirinya pada tanggal 1 Maret 2000, yang selanjutnya diperingati sebagai hari lahir Sekar TELKOM.</p>
                        
                        <p>Tiga tahun pertama semenjak kelahiran Sekar TELKOM adalah tahun penuh tantangan dan bahkan ancaman kepada eksistensi TELKOM atau tahun-tahun vivere pericoloso. Gelombang aksi unjuk rasa Sekar TELKOM mewarnai media massa lokal maupun nasional sebagai protes atas buruknya kinerja KSO-3 Jabar dan rencana pengalihan Divre-4 Jateng-DIY kepada Indosat.</p>
                        
                        <p>Perjuangan Sekar TELKOM dalam mewujudkan misi kesejahteraan anggota telah menemukan formatnya dalam bentuk Perjanjian Kerja Bersama (PKB) yang lahir sejak tahun 2002. Kini PKB telah sampai pada amandemen ke 6 yang berlaku sejak 2015 hingga 2017.  PKB adalah salah satu pilar  hubungan industrial antara karyawan TELKOM dan Manajemen TELKOM yang mengatur siklus ketenagakerjaan di TELKOM mulai dari rekrutmen hingga pensiun.</p>
                    </div>
                    <div class="profile-image">
                        <img src="../assets/logo-sekar-500.png" alt="profile Image">
                    </div>
                </div>
            </div>
            <div id="visi-misi" class="content">
                <div class="profile-content">
                    <div class="profile-text">
                        <h2>Visi dan Misi</h2>
                        <p>Isi konten Visi dan Misi</p>
                    </div>
                    <div class="profile-image">
                        <img src="../assets/logo-sekar-500.png" alt="profile Image">
                    </div>
                </div>
            </div>
            <div id="struktur" class="content">
                <div class="profile-content">
                    <div class="profile-text">
                        <h2>Struktur Kepengurusan</h2>
                        <p>Isi konten Struktur Kepengurusan</p>
                    </div>
                    <div class="profile-image">
                        <img src="../assets/logo-sekar-500.png" alt="profile Image">
                    </div>
                </div>
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
