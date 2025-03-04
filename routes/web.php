<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/sign-in', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/sign-in', [AuthController::class, 'login']);
// Route::get('/sign-up', [AuthController::class, 'showRegister'])->name('register');
// Route::post('/sign-up', [AuthController::class, 'register']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard'); // Sesuai dengan lokasi file di folder `admin`
//     })->name('admin.dashboard');
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/home', function () {
//         return view('user.home');
//     })->name('user.home');
// });

Route::get('/', function () {
    return view('landing_page');
});

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::get('/admin/profile', function () {
    return view('admin.profile');
});

Route::get('/admin/rtl', function () {
    return view('admin.rtl');
});

Route::get('/sign-in', function () {
    return view('auth.sign-in');
})->name('login');

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/pemesanan', function () {
    return view('user.pemesanan');
});

Route::get('/riwayat pemesanan', function () {
    return view('user.riwayat_pemesanan');
});

Route::get('/form travel', function () {
    return view('user.form_travel');
});

Route::get('/form kirimbarang', function () {
    return view('user.form_kirimbarang');
});

Route::get('/e-ticket/{kode}', function ($kode) {
    return view('user.e_ticket', [
        'kode' => $kode,
        'nama_pengirim' => 'Budi Santoso',
        'nama_penerima' => 'Siti Aminah',
        'alamat_pengirim' => 'Jl. Mawar No. 10, Malang',
        'alamat_penerima' => 'Jl. Melati No. 20, Surabaya',
        'tanggal' => '02 Maret 2025',
        'waktu' => '06:00 Malang'
    ]);
});

Route::get('/profil', function () {
    return view('user.profil', [
        'nama' => 'Ulfi Tamami',
        'email' => 'ulfi@example.com',
        'nomor_hp' => '08123456789',
        'alamat' => 'Jl. Mawar No. 10, Malang'
    ]);
});

Route::get('/profil/edit', function () {
    return view('user.edit_profil');
});

Route::post('/profil/update', function () {
    return redirect('/profil')->with('success', 'Profil berhasil diperbarui!');
});




