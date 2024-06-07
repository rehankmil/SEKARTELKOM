<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KartuController;

Route::get('/check-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Koneksi ke database berhasil.";
    } catch (\Exception $e) {
        return "Koneksi ke database gagal: " . $e->getMessage();
    }
});

//                                                          LANDING PAGE
Route::get('/', function () {
    return view('welcome');
});

// LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// REGISTER
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/lptentangkami', function () {
    return view('lp/tentangkami');
});

Route::get('/lpberita', function () {
    return view('lp/berita');
});

Route::get('/lpmedia', function () {
    return view('lp/media');
});

Route::get('/lpevent', function () {
    return view('lp/event');
});

Route::get('/lpbakti', function () {
    return view('lp/bakti');
});



//                                                          ANGGOTA
Route::get('/tentangkami', function () {
    return view('users/tentangkami');
});

Route::get('/berita', function () {
    return view('users/berita');
});

Route::get('/dokumen', function () {
    return view('users/dokumen');
});

Route::get('/media', function () {
    return view('users/media');
});

Route::get('/event', function () {
    return view('users/event');
});

Route::get('/bakti', function () {
    return view('users/bakti');
});

Route::get('/keluhan', function () {
    return view('users/keluhan');
});

Route::get('/aspirasi', function () {
    return view('users/aspirasi');
});

Route::get('/profiladmin', function () {
    return view('admin/profiladmin');
});

Route::get('/loginusers', function () {
    return view('users/dashboard');
});

Route::get('/dashboard', function () {
    return view('users/dashboard');
});

// Route::get('/profil', function () {
//     return view('users/profil');
// });

Route::get('/profil', [ProfilController::class, 'show'])->middleware('auth')->name('profil');



//                                                          ADMIN
Route::get('/dataanggota', function () {
    return view('admin/dataanggota');
});

Route::get('/datakeluhan', function () {
    return view('admin/datakeluhan');
});

Route::get('/dataaspirasi', function () {
    return view('admin/dataaspirasi');
});

Route::get('/dashboardadmin', function () {
    return view('admin/dashboardadmin');
});


//                                                          SUPERADMIN
Route::get('/dashboardsuperadmin', function () {
    return view('superadmin/dashboardsuperadmin');
});



Route::get('/profilsuperadmin', function () {
    return view('superadmin/profilsuperadmin');
});

Route::get('/approve', function () {
    return view('superadmin/approve');
});


Route::get('/loginadmin', function () {
    return view('admin/dashboardadmin');
});



/* LOGIN ROUTES */
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/dashboardadmin', function () {
//     return view('admin/dashboardadmin');
// })->name('dashboardadmin')->middleware('auth');

// Route::get('/dashboard', function () {
//     return view('users/dashboard');
// })->name('dashboard')->middleware('auth');


// /* PROFILE ROUTES */
// Route::get('/profil', [ProfilController::class, 'show'])->name('profil')->middleware('auth');


// /* CARD ROUTES */
// Route::get('/kartu', [KartuController::class, 'show'])->name('kartu')->middleware('auth');