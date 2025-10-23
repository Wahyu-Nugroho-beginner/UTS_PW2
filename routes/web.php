<?php
use app\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('wisata', WisataController::class);
