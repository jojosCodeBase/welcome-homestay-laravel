<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/policies', [HomeController::class, 'policies'])->name('policies');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('places', [HomeController::class, 'places'])->name('places');
