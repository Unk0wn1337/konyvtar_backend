<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\LibUserController;
use App\Http\Controllers\UserController;
use App\Models\Copy;
use Database\Factories\BookFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// GET
Route::get('/users', [UserController::class, 'index']);
// paraméteres utvobal és $ ne tegyünk, kebabCase a preferált
Route::get('/user/{id}', [UserController::class, 'show']);
// POST
Route::post('/user', [UserController::class, 'store']);

Route::get('/books', [BookFactory::class, 'index']);
// paraméteres utvobal és $ ne tegyünk, kebabCase a preferált
Route::get('/book/{id}', [BookFactory::class, 'show']);
// POST
Route::post('/book', [BookFactory::class, 'store']);


Route::get('/books', [BookController::class, 'index']);
// paraméteres utvobal és $ ne tegyünk, kebabCase a preferált
Route::get('/book/{id}', [BookController::class, 'show']);
// POST
Route::post('/book', [BookController::class, 'store']);

Route::get('/copy', [CopyController::class, 'index']);
// paraméteres utvobal és $ ne tegyünk, kebabCase a preferált
Route::get('/copy/{id}', [CopyController::class, 'show']);
// POST
Route::post('/copy', [CopyController::class, 'store']);


//lending
Route::get('/lendings', [LendingController::class, 'index']);
Route::get('/lendings/{user_id}/{copy_id}/{start}', [LendingController::class, 'show']);
Route::post('/lending', [LendingController::class, 'store']);
Route::put('/lendings/{user_id}/{copy_id}/{start}', [LendingController::class, 'update']);
Route::delete('/lendings/{user_id}/{copy_id}/{start}', [LendingController::class, 'destroy']);