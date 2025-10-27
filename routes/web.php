<?php
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

<<<<<<< HEAD
// If you still want the resourceful routes, keep this; otherwise the single show route below will handle listing individual pages.
// Route::resource('wisata', WisataController::class);

// Single slug-based route for wisata pages (e.g. /wisata/kebun-teh)
Route::get('/wisata/{slug}', [WisataController::class, 'show'])->name('wisata.show');

// Optional: keep a route for the kerinci page alias if you want /kerinci to map to the same content
Route::get('/kerinci', function () {
    return view('Desa Wisata.Main.wisata.danau-kerinci');
});
=======
// Simple page route for Danau Kerinci
Route::get('/kerinci', function () {
    return view('kerinci');
});

Route::get('/register', [WisataController::class, 'create'])->name('register.create');
Route::post('/register', [WisataController::class, 'store'])->name('register.store');
>>>>>>> 11d7a5cae7f776183327f6a6e454ee493c3b2f80
