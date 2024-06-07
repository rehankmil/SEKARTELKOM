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
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="text" name="nik" placeholder="Nomor Induk Karyawan" class="register-input" value="{{ old('nik') }}">
                    @error('nik')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="register-input" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <select name="id_posisi" class="register-input">
                        <option disabled selected value="">Pilih Posisi</option>
                        <option value="1">CEO</option>
                        <option value="2">CFO</option>
                        <option value="3">CIO</option>
                        <option value="4">CMO</option>
                        <option value="5">COO</option>
                        <option value="6">HRD</option>
                        <option value="7">Teknologi Informasi</option>
                        <option value="8">Pemasaran</option>
                        <option value="9">Produk</option>
                        <option value="10">Penjualan</option>
                    </select>
                    @error('id_posisi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <input type="text" name="no_telp" placeholder="Nomor Telepon" class="register-input" value="{{ old('no_telp') }}">
                    @error('no_telp')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <select class="register-input">
                        <option disabled selected value="">Pilih DPW</option>
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
                    <input type="password" name="password" placeholder="Kata Sandi" class="register-input">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" class="register-input">
                    <button type="submit" class="register-btn">Daftar</button>
                    <a href="/dashboard">DAFTAR</a> <br><br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>