<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/location', [PagesController::class, 'location']);
Route::get('/contact', [PagesController::class, 'contact']);