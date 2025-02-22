<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

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


