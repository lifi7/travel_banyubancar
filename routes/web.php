<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


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
});

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});

Route::get('/admin/rtl', function () {
    return view('admin.rtl');
});

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



