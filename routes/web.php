<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelRoomsController;
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

// routes/web.php


// Route for the homepage/dashboard
Route::get('/', function () {
    return view('dashboard'); // Assuming you have a dashboard view
})->name('dashboard');

// Routes for Room Management
Route::get('/rooms', [HotelRoomsController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [HotelRoomsController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [HotelRoomsController::class, 'store'])->name('rooms.store');
Route::get('/rooms/{id}', [HotelRoomsController::class, 'show'])->name('rooms.show');

// Routes for Booking Management
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
