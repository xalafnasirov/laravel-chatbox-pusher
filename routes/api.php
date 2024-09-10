<?php

use App\Http\Controllers\PusherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('broadcast', [PusherController::class,'broadcast'])->name('chat.broadcast');
Route::post('recieve', [PusherController::class,'recieve'])->name('chat.recieve');
