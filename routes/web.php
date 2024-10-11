<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import Auth facade


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.index');
});


Route::get('/master', function () {
    return view('layout.master');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\PageControllerController;
// Route untuk halaman Services
Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/coming-soon', [PageController::class, 'comingSoon'])->name('coming-soon');


Route::get('/contact', [PageController::class, 'contact'])->name('contact');
