<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Akun</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/favicon.png">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <a href="/">
                <img src="assets/sekar2.png" alt="Logo Perusahaan" class="login-logo">
            </a>
            <h2>Masuk Ke Akun Anda</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="nik" placeholder="Nomor Induk Karyawan" class="login-input" value="{{ old('nik') }}">
                <input type="password" name="password" placeholder="Kata Sandi" class="login-input">
                <button type="submit" class="login-btn">Login</button>
                @if ($errors->has('loginError'))
                    <div class="alert">
                        {{ $errors->first('loginError') }}
                    </div>
                @endif
            </form>
            <p>Belum punya Akun? <a href="/register">Daftar Sini</a></p>
        </div>
    </div>
</body>
</html>
