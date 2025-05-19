<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [PublicController::class, 'index'])->name('public.index');
Route::get('/post/{id}', [PublicController::class, 'detailPost'])->name('public.detailPost');
Route::get('/authors', [PublicController::class, 'authors'])->name('public.authors');
Route::get('/author/{id}', [PublicController::class, 'author'])->name('public.author');




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $authorsCount = \App\Models\Author::count();
        $postsCount = \App\Models\Post::count();
        return Inertia::render('Dashboard', [
            'authorsCount' => $authorsCount,
            'postsCount' => $postsCount,
        ]);
    })->name('dashboard');

    Route::resource('posts', PostController::class)->except(['show']);
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
