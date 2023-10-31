<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('profile');
})->name('/')->middleware('auth');

Route::get('/search/car', [CarController::class, 'index'])->name('/search/car')->middleware('auth');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('/wishlist')->middleware('auth');

Route::get('/booking', function () {
    return view('rentcar');
})->name('/booking')->middleware('auth');
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::post('/logout', 'logout')->name('logout');
});
