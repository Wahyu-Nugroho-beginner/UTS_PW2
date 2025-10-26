<?php
use app\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::resource('wisata', WisataController::class);

// Simple page route for Danau Kerinci
Route::get('/kerinci', function () {
    return view('kerinci');
});
