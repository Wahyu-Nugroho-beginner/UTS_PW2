<?php
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Desa Wisata.index'); 
});

// Single slug-based route for wisata pages
Route::get('/wisata/{slug}', [WisataController::class, 'show'])->name('wisata.show');

// Kalau ingin halaman kerinci tunggal, gunakan satu route (hapus duplikat)
Route::get('/kerinci', function () {
    return view('Desa Wisata.Main.wisata.danau-kerinci');
});

Route::get('/register', [WisataController::class, 'create'])->name('register.create');
Route::post('/register', [WisataController::class, 'store'])->name('register.store');

Route::get('/fasilitas/{slug}', [WisataController::class, 'showFasilitas'])->name('fasilitas.show');
