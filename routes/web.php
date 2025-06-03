<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/o-nas', [AboutController::class, 'index'])->name('about.index');



Route::fallback(function () {
    return redirect('/');
});
