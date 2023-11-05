<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
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

Route::get('/', function () {
    return redirect()->route('/booking');
})->name('/')->middleware('auth');

Route::get('/admin/add-car', [AdminController::class, 'formcar'])->name('admin/add-car')->middleware('auth');
Route::post('/admin/add-car', [AdminController::class, 'store'])->name('admin/add-car')->middleware('auth');

Route::get('/transaction', [BookingController::class, 'index'])->name('/transaction')->middleware('auth');
Route::get('/transaction/{id}', [BookingController::class, 'store'])->name('/transaction/{id}')->middleware('auth');
Route::get('/transaction/delete/{id}', [BookingController::class, 'destroy'])->name('/transaction/delete/{id}')->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->name('/admin')->middleware('auth');
Route::get('/admin/car/delete/{id}', [AdminController::class, 'destroy'])->name('/admin/car/delete/{id}')->middleware('auth');

Route::get('/search/car', [CarController::class, 'indexSearch'])->name('/search/car')->middleware('auth');
Route::get('/search-car', [CarController::class, 'find'])->name('/search-car')->middleware('auth');
Route::post('/add-to-bookmarks', [WishlistController::class, 'store'])->name('/add-to-bookmarks')->middleware(('auth'));
Route::post('/delete-bookmarks', [WishlistController::class, 'destroy'])->name('/delete-bookmarks')->middleware(('auth'));



Route::get('/wishlist', [WishlistController::class, 'index'])->name('/wishlist')->middleware('auth');

Route::get('/booking', [CarController::class, 'index'])->name('/booking')->middleware('auth');
Route::controller(UserController::class)->group(function () {

    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::post('/user/update', 'update')->name('updateUser');
    Route::post('/logout', 'logout')->name('logout');
});
