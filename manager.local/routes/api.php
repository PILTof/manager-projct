<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\StorageTestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/posts', [PostsController::class, 'listForBanner'])->name('posts.list');