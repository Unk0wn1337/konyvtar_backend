<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LibUserController;
use App\Models\Copy;
use Database\Factories\BookFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// GET
Route::get('/users', [LibUserController::class, 'index']);
// paraméteres utvobal és $ ne tegyünk, kebabCase a preferált
Route::get('/user/{id}', [LibUserController::class, 'show']);
// POST
Route::post('/user', [LibUserController::class, 'store']);

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