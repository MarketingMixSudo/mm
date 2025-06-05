<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WwwController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProjectsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/o-nas', [AboutController::class, 'index'])->name('about.index');

Route::get('/projektowanie', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/projektowanie-i-tworzenie-logotypow', [ProjectsController::class, 'logotypes'])->name('projects.logotypes');
Route::get('/projektowanie-i-tworzenie-wizytowek-firmowych', [ProjectsController::class, 'businessCards'])->name('projects.businessCards');
Route::get('/projektowanie-papieru-firmowego', [ProjectsController::class, 'letterhead'])->name('projects.letterhead');
Route::get('/projektowanie-plakatow-i-ulotek', [ProjectsController::class, 'posters'])->name('projects.posters');

Route::get('/www', [WwwController::class, 'index'])->name('www.index');
Route::get('/www/profesjonalne-tworzenie-stron-internetowych', [WwwController::class, 'websites'])->name('www.websites');
Route::get('/www/projektowanie-tworzenie-sklepow-internetowych', [WwwController::class, 'ecommerce'])->name('www.ecommerce');
Route::get('/realizacje', [WwwController::class, 'realisations'])->name('www.realisations');

Route::get('/kampanie', [CampaignsController::class, 'index'])->name('campaigns.index');
Route::get('/tresci', [ContentController::class, 'index'])->name('content.index');


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/artykul', [BlogController::class, 'show'])->name('blog.show');

Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');


Route::fallback(function () {
    return redirect('/');
});
