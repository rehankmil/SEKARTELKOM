<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/favicon.png">
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <div class="register-header">
                <a href="/">
                    <img src="assets/sekar2.png" alt="Logo Perusahaan" class="register-logo">
                </a>
                <h2>FORMULIR PENDAFTARAN ANGGOTA SERIKAT KARYAWAN TELKOM</h2>
            </div>
            <div class="register-form">
                <p>Yang bertuliskan di bawah ini :</p>
                <form>
                    <input type="text" placeholder="Nomor Induk Karyawan" class="register-input">
                    <input type="text" placeholder="Nama Lengkap" class="register-input">
                    <input type="text" placeholder="Posisi" class="register-input">
                    <input type="text" placeholder="Nomor Telepon" class="register-input">
                    <input type="text" placeholder="DPW" class="register-input">
                    <p class="justify-text">
                        Dengan ini saya bersedia dan berkehendak untuk mendaftarkan diri menjadi anggota Serikat Karyawan PT. Telekomunikasi Indonesia, Tbk. (SEKAR TELKOM).
                    </p>
                    <p class="justify-text">
                        Saya telah mempelajari, mengerti, dan menyetujui hak dan kewajiban anggota SEKAR TELKOM, serta menyatakan bersedia dan sanggup membayar iuran anggota Sekar Telkom yang akan dipotong melalui proses payroll tiap bulan selama menjadi anggota, dengan jumlah iuran wajib anggota sebesar Rp 25.000,00 dan iuran sukarela sebesar :
                    </p>
                    <div class="flex-row">
                        <input type="text" placeholder="Rp 0,00" class="register-input small-input">
                        <span class="small-text bold-text">*) Iuran sukarela diisi dengan kelipatan Rp 5000,00</span>
                    </div>
                    <p>Demikian pendaftaran ini saya buat dengan kondisi sebenarnya dan dalam kondisi sadar, tanpa ada tekanan atau paksaan dari pihak manapun untuk dipergunakan sebagaimana mestinya.</p>
                    <p>*) Validasi registrasi dengan password portal</p>
                    <input type="password" placeholder="Kata Sandi" class="register-input">
                    <input type="password" placeholder="Konfirmasi Kata Sandi" class="register-input">
                    <button type="submit" class="register-btn">Daftar</button>
                    <a href="/dashboard">DAFTAR</a> <br><br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>