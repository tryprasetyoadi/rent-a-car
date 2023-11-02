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

Route::get('/profile', function () {
    return view('profile');
})->name('/profile')->middleware('auth');

Route::get('/search/car', [CarController::class, 'indexSearch'])->name('/search/car')->middleware('auth');
Route::get('/search-car', [CarController::class, 'find'])->name('/search-car')->middleware('auth');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('/wishlist')->middleware('auth');

Route::get('/booking', [CarController::class, 'index'])->name('/booking')->middleware('auth');
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::post('/user/update', 'update')->name('updateUser');
    Route::post('/logout', 'logout')->name('logout');
    
});
