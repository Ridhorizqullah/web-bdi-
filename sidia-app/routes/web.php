<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Berita;
use App\Livewire\Pages\SatuanKerja;
use App\Livewire\Pages\Statistik;
use App\Livewire\Pages\Diklat;
use App\Livewire\Pages\Infrastruktur;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\PendaftaranDiklat;

Route::get('/', Home::class)->name('home');
Route::get('/berita', Berita::class)->name('berita');
Route::get('/satuan-kerja', SatuanKerja::class)->name('satuan-kerja');
Route::get('/statistik', Statistik::class)->name('statistik');
Route::get('/diklat', Diklat::class)->name('diklat');
Route::get('/infrastruktur', Infrastruktur::class)->name('infrastruktur');
Route::get('/login', Login::class)->name('login');
Route::get('/pendaftaran', PendaftaranDiklat::class)->name('pendaftaran');
