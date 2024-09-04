<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/post/home', [PostController::class, 'showHome'])->middleware('auth');
Route::get('/post/home', [PostController::class, 'showListPost'])->middleware('auth');

Route::post('post/home', [AuthController::class, 'logout']);

Route::get('/create', [PostController::class, 'showCreate'])->middleware('auth');
Route::post('/create', [PostController::class, 'createPost']);

Route::get('/posts/{id}', [PostController::class, 'showPost'])->middleware('auth');
Route::post('/posts/{id}', [PostController::class, 'deletePost'])->middleware('auth');

Route::get('posts/{id}/edit', [PostController::class, 'showEdit'])->middleware('auth');
Route::post('posts/{id}/edit', [PostController::class, 'edit'])->middleware('auth');
