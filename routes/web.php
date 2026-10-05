<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;

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