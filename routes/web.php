<?php
use App\Http\Controllers\WisataController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Desa Wisata.index'); 
});

// Shortcut route to the alternate index page (index2)
Route::get('/index2', function () {
    if (!session('user_id')) {
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }
    return view('Desa Wisata.index2');
})->name('home.index2');


// Wisata pages
Route::get('/wisata/{slug}', [WisataController::class, 'show'])->name('wisata.show');

// Kalau ingin halaman kerinci tunggal, gunakan satu route (hapus duplikat)
Route::get('/kerinci', function () {
    return view('Desa Wisata.Main.wisata.danau-kerinci');
});

Route::get('/register', [WisataController::class, 'create'])->name('register.create');
Route::post('/register', [WisataController::class, 'store'])->name('register.store');
Route::get('/fasilitas/{slug}', [WisataController::class, 'showFasilitas'])->name('fasilitas.show');
Route::get('/produk/store', [WisataController::class, 'showProduk'])->name('produk.showProduk');

// Checkout Routes
Route::get('/produk/checkout/{id}', [CheckoutController::class, 'index'])->name('produk.checkout');
Route::post('/produk/checkout/process', [CheckoutController::class, 'process'])->name('produk.checkout.process');

// Pesanan Routes
Route::get('/pesanan', [CheckoutController::class, 'showPesanan'])->name('pesanan.show');

// Authentication Routes
Route::get('/login', [WisataController::class, 'showLoginForm'])->name('login');
Route::post('/login', [WisataController::class, 'login'])->name('login.store');
Route::post('/logout', [WisataController::class, 'logout'])->name('logout');

// Profile Routes
Route::get('/profile', [WisataController::class, 'profile'])->name('profile.show');
Route::get('/profile/edit', [WisataController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update', [WisataController::class, 'updateProfile'])->name('profile.update');

Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.list');

// Menampilkan detail pesanan berdasarkan ID
Route::get('/pesanan/{id}', [PesananController::class, 'show'])->name('pesanan.show');