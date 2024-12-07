<?php

use Illuminate\Support\Facades\Route;

// Route ke halaman login
Route::get('/', function () {
    return view('login');
})->name('login');

// Route ke halaman register
Route::get('/register', function () {
    return view('register');
})->name('register');

// Route ke halaman home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Proses login (contoh)
Route::post('/login', function () {
    // Di sini bisa ditambahkan validasi login
    return redirect()->route('home');
})->name('login.process');