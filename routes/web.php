<?php
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

// Simple page route for Danau Kerinci
Route::get('/kerinci', function () {
    return view('kerinci');
});

Route::get('/register', [WisataController::class, 'create'])->name('register.create');
Route::post('/register', [WisataController::class, 'store'])->name('register.store');