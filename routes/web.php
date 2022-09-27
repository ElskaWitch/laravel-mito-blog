<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('about', [PostController::class, 'about'])->name('about');
Route::resource('posts', PostController::class);
