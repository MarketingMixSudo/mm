<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/o-nas', [AboutController::class, 'index'])->name('about.index');
Route::get('/projektowanie', [ProjectsController::class, 'index'])->name('projects.index');



Route::fallback(function () {
    return redirect('/');
});
