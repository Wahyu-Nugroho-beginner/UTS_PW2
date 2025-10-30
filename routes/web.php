<?php
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Desa Wisata.index'); 
});

// Shortcut route to the alternate index page (index2)
Route::get('/index2', function () {
    return view('Desa Wisata.index2');
})->name('home.index2');

// Single slug-based route for wisata pages
Route::get('/wisata/{slug}', [WisataController::class, 'show'])->name('wisata.show');

// Kalau ingin halaman kerinci tunggal, gunakan satu route (hapus duplikat)
Route::get('/kerinci', function () {
    return view('Desa Wisata.Main.wisata.danau-kerinci');
});

Route::get('/register', [WisataController::class, 'create'])->name('register.create');
Route::post('/register', [WisataController::class, 'store'])->name('register.store');
Route::get('/fasilitas/{slug}', [WisataController::class, 'showFasilitas'])->name('fasilitas.show');
route::get('/produk/store', [WisataController::class, 'showProduk'])->name('produk.showProduk');


Route::get('/login', [WisataController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [WisataController::class, 'login'])->name('login.store');
