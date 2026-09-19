<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

// Public invitation page
Route::get('/', [GuestController::class, 'home'])->name('home');

// Public RSVP submission
Route::post('/guest', [GuestController::class, 'store'])->name('guest.store');
Route::get('/guests/latest', [GuestController::class, 'getGuests'])->name('guests.latest');

// Admin authentication
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin protected routes
Route::middleware('admin.auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::delete('/admin/guests/{guest}', [AdminController::class, 'destroyGuest'])->name('admin.guests.destroy');
});