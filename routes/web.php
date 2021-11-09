<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/header', [PagesController::class, 'header']);
Route::get('/', [PagesController::class, 'index']);
Route::get('/location', [PagesController::class, 'location']);