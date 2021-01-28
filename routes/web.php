<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', [PostController::class, 'index'])->name('pages.contenido');

Route::get('contacto', function () {
    return view('pages/contact');
});

