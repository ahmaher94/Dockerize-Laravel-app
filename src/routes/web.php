<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello From Laravel docker';
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/get', [PostController::class, 'getFood']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/comments', [CommentController::class, 'index']);
Route::get('/posts/{post}/comments/{comment}', [CommentController::class, 'show']);
