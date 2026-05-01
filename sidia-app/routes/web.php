<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/berita', function () {
    return view('home'); // Placeholder for now
});

Route::get('/satuan-kerja', function () {
    return view('home'); // Placeholder
});

Route::get('/statistik', function () {
    return view('home'); // Placeholder
});

Route::get('/diklat', function () {
    return view('home'); // Placeholder
});

Route::get('/infrastruktur', function () {
    return view('home'); // Placeholder
});
