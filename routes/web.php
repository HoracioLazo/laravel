<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('index');
});
// Route::get('web', function () {
//     return view('welcome');
// });

// Route::get('app', function () {
//     return view('layouts/footers/footers');
// });
// // Route::get('prueba', function () {
// //     return view('prueba');
// // });
// Route::get('single', function () {
//     return view('pages/single_page');
// });

// Route::get('contact', function () {
//     return view('pages/404');
// });


Route::get('page', [PostController::class, 'single'])->name('pages.single_page');
Route::get('asaide', [PostController::class, 'asaide'])->name('components.aside');



