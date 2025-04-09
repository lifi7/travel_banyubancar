<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DriverController;


Route::get('/sign-up', [AuthController::class, 'showSignUpForm'])->name('signup');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('signup.submit');
Route::get('/sign-in', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/sign-in', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('user.home');
})->middleware('auth')->name('user.home');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/admin/data-pelanggan', function () {
    return view('admin.data_pelanggan.index');
})->name('pelanggan');

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});

Route::get('/admin/data-pemesanan', function () {
    return view('admin.pemesanan.index');
})->name('data-pemesanan');

Route::get('/admin/data-armada', function () {
    return view('admin.data_armada.index');
})->name('armada');

// Route::get('/admin/jadwalperjalanan', function () {
    // return view('admin.jadwal_perjalanan');
// })->name('jadwal');

Route::resource('admin/jadwals', JadwalController::class);

Route::resource('admin/drivers', DriverController::class);

Route::get('/pemesanan', function () {
    return view('user.pemesanan');
})->name('pemesanan');


Route::get('/riwayatpemesanan', function () {
    return view('user.riwayatpemesanan');
});

Route::get('/form_travel', function () {
    return view('user.form_travel');
});

Route::get('/riwayatpemesanantravel', function () {
    return view('user.riwayatpemesanantravel');
});

Route::get('/ticket', function () {
    return view('user.e_ticket');
});

Route::get('/berita', function () {
    return view('user.berita');
});

Route::get('/profil', function () {
    return view('user.profil');
})->middleware('auth');

Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::patch('/profile/password', [ProfileController::class, 'updatePassword'])
    ->middleware('auth')
    ->name('profile.password');



