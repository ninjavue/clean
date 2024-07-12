<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main']);
Route::get('/about', [MainController::class,'about']);
Route::get('/service', [MainController::class, 'service']);
Route::get('/project', [MainController::class, 'project']);
Route::get('/blog', [MainController::class,'blog']);
Route::get('/single', [MainController::class, 'single']);
Route::get('/contact', [MainController::class, 'contact']);