<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteHealthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('pages.home');
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);
    Route::resource('pages', PageController::class);
    Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');
    Route::get('posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
    Route::get('pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
    Route::put('pages/{page}', [PageController::class, 'update'])->name('pages.update');
/*  Route::get('appearance', [AppearanceController::class, 'index'])->name('appearance.index');
    Route::post('appearance', [AppearanceController::class, 'store'])->name('appearance.store');*/
});

Auth::routes();


