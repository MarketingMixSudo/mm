<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/o-nas', [AboutController::class, 'index'])->name('about.index');
Route::get('/projektowanie', [ProjectsController::class, 'index'])->name('projects.index');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/artykul', [BlogController::class, 'show'])->name('blog.show');

Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');


Route::fallback(function () {
    return redirect('/');
});
