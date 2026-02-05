<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/ideas', [IdeaController::class, 'index']);
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post('/ideas', [IdeaController::class, 'store']);
    Route::get('/ideas/{idea:id}', [IdeaController::class, 'show']);
    Route::get('/ideas/{idea:id}/edit', [IdeaController::class, 'edit']);
    Route::patch('/ideas/{idea:id}', [IdeaController::class, 'update']);
    Route::delete('/ideas/{idea:id}', [IdeaController::class, 'destroy']);

    Route::delete('/logout', [SessionsController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/login', [SessionsController::class, 'store']);
});
