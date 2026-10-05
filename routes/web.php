<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/rooms/create', [RoomController::class, 'create']);

Route::post('/rooms', [RoomController::class, 'store']);

Route::get('/rooms/{room}/edit', [RoomController::class, 'edit']);

Route::put('/rooms/{room}', [RoomController::class, 'update']);

Route::delete('/rooms/{room}', [RoomController::class, 'destroy']);

Route::get('/guests', [GuestController::class, 'index']);

Route::get('/guests/create', [GuestController::class, 'create']);

Route::post('/guests', [GuestController::class, 'store']);

Route::get('/guests/{id}/edit', [GuestController::class, 'edit']);

Route::put('/guests/{id}', [GuestController::class, 'update']);

Route::delete('/guests/{id}', [GuestController::class, 'destroy']);

Route::get('/bookings', [BookingController::class, 'index']);

Route::get('/bookings/create', [BookingController::class, 'create']);

Route::post('/bookings', [BookingController::class, 'store']);

Route::put('/bookings/{id}/checkout', [BookingController::class, 'checkout']);

Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/payments/create', [PaymentController::class, 'create']);
Route::post('/payments', [PaymentController::class, 'store']);