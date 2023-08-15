<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
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

Route::get('/', [AboutController::class, 'home'])->name('welcome');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/team', function () {
    return view('pages.team');
})->name('team');
Route::get('/services', function () {
    return view('pages.service');
})->name('services');
Route::get('/testimonials', function () {
    return view('pages.testimonial');
})->name('testimonials');

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms/create', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/rooms/{room_id}/bookings', [BookingController::class, 'index'])->name('rooms.show.bookings.index');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events/create', [EventController::class, 'store'])->name('events.store');
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    
});

Route::middleware('auth')->group(function () {
    Route::get('/rooms/{room_id}/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/rooms/{room_id}/booking/create', [BookingController::class, 'store'])->name('booking.store');
    Route::post('/comments/create', [CommentController::class, 'store'])->name('comments.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';