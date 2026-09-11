<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/rooms/create', [RoomController::class, 'create']);

Route::post('/rooms', [RoomController::class, 'store']);