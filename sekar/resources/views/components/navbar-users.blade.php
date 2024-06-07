<div id="sidebar" class="sidebar">
    <nav class="sidebar-nav">
        <ul>
            <li><a href="/dashboard" class="active"><img src="../assets/dashboard.png" alt="Dashboard Icon"> Dashboard</a></li>
            <li><a href="/keluhan"><img src="../assets/keluhanabu.png" alt="Keluhan Icon"> Advokasi/Konsultasi</a></li>
            <li><a href="/aspirasi"><img src="../assets/aspirasiabu.png" alt="Aspirasi Icon"> Aspirasi</a></li>
            <li><a href="javascript:void(0);" onclick="showPopup()"><img src="../assets/kartuabu.png" alt="Kartu Icon"> Kartu Anggota</a>
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

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <img src="../assets/kartubaru.png" alt="New Card">
    </div>
</div>