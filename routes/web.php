<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

<<<<<<< HEAD

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
})->name('admin.dashboard');
=======
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
// })->middleware(['auth', 'admin'])->name('admin.dashboard');
>>>>>>> fitur-tertinggal

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});

Route::get('/user/profile', function () {
    return view('user.profile');
});

Route::get('/admin/rtl', function () {
    return view('admin.rtl');
});

<<<<<<< HEAD
// Route::get('/sign-in', function () {
//     return view('auth.sign-in');
// })->name('login');

// Route::get('/sign-up', function () {
//     return view('auth.sign-up');
// });

// Route::get('/home', function () {
//     return view('user.home');
// });

=======
>>>>>>> fitur-tertinggal
Route::get('/pemesanan', function () {
    return view('user.pemesanan');
})->name('pemesanan');

Route::get('/riwayatpemesanan', function () {
    return view('user.riwayatpemesanan');
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

Route::get('/profile', function () {
    return view('user.profil');
})->middleware('auth');

<<<<<<< HEAD
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'changePassword'])->name('profile.password');
=======
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

>>>>>>> fitur-tertinggal



