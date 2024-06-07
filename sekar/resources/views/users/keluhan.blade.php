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
    <x-navbar-users></x-navbar-users>
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
                            <input type="radio" id="dpp" name="tujuan" value="dpp">
                            <label for="dpp">DPP</label>
                            <input type="radio" id="dpw" name="tujuan" value="dpw">
                            <label for="dpw">DPW</label>
                            <input type="radio" id="dpd" name="tujuan" value="dpd">
                            <label for="dpd">DPD</label>
                        </div>

                        <div id="dpw-dropdown" class="hidden">
                        <label for="dpw-select">DPW</label>
                        <select id="dpw-select" class="fitur-input">
                            <option value="Sumatera">DPW Sumatera</option>
                            <option value="Jakarta 1">DPW Jakarta 1</option>
                            <option value="Jakarta 2">DPW Jakarta 2</option>
                            <option value="Jawa Barat 1">DPW Jawa Barat 1</option>
                            <option value="Jawa Barat 2">DPW Jawa Barat 2</option>
                            <option value="Jawa Tengah dan DIY">DPW Jawa Tengah dan DIY</option>
                            <option value="Jawa Timur">DPW Jawa Timur</option>
                            <option value="Kalimantan">DPW Kalimantan</option>
                            <option value="KTI">DPW KTI</option>
                        </select>
                        </div>
                        
                        <div id="dpd-dropdown" class="hidden">
                            <label for="dpd-select">DPD</label>
                            <select id="dpd-select" class="fitur-input">
                                <option value="daerah1">DPD 1</option>
                                <option value="daerah2">DPD 2</option>
                                <option value="daerah3">DPD 3</option>
                            </select>
                        </div>
                        
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="fitur-input" rows="10" placeholder="Masukkan deskripsi"></textarea>
                        
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
