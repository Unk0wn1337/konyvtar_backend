<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// bárki által elérhető
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);


//autentikált útvonal
Route::middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::get('lendings-copies', [LendingController::class, "lendingsWithCopies"]);
        // Kijelentkezés útvonal
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
    });

    Route::get('books-copies', [BookController::class, "booksWithCopies"]);
    Route::get('userlendings', [UserController::class, "userLendings"]);
    
    //összes kérés
    Route::apiResource('/users', UserController::class);
    Route::patch('update-password/{id}', [UserController::class, "updatePassword"]);
    
    Route::middleware(['auth:sanctum', Admin::class])
    ->group(function () {
        Route::get('specific-date', [LendingController::class, "dateSpecific"]);
        Route::get('specific-copy/{copy_id}', [LendingController::class, "copySpecific"]);
        
        Route::get('/admin/users', [UserController::class, 'index']);
    });
