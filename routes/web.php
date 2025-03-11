<?php

use App\Livewire\DetailNews;
use App\Livewire\Home;
use App\Livewire\News;
use App\Livewire\Pegawai;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/berita/kategori/{slug}', News::class)->name('category.news');
Route::get('/berita/{slug}', DetailNews::class)->name('show.news');

Route::get('/profil/pegawai', Pegawai::class)->name('index.pegawai');
Route::get('/profil/{page}', Profile::class)->name('index.profile');
