<?php

use App\Http\Controllers\SiteOneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [SiteOneController::class, 'home'])->name('home');
Route::get('/contact', [SiteOneController::class, 'contact'])->name('contact');
Route::post('/postcontact', [SiteOneController::class, 'postcontact'])->name('postcontact');
Route::get('/service', [SiteOneController::class, 'service'])->name('service');
Route::get('/about', [SiteOneController::class, 'about'])->name('about');
Route::get('/portfolio', [SiteOneController::class, 'portfolio'])->name('portfolio');
Route::get('/viewcontact', [SiteOneController::class, 'viewcontact'])->name('viewcontact');

