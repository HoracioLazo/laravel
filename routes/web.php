<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('contacto', function () {
    return view('pages/contact');
});


Route::get('page', [PostController::class, 'single'])->name('pages.single_page');
Route::get('asaide', [PostController::class, 'asaide'])->name('components.aside');



