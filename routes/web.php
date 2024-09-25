<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/portofolio', [PortofolioController::class, 'portofolio']);

Route::get('/contact', [ContactController::class, 'contact']);
