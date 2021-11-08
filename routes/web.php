<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('home');
});

Route::get('/nav', [IndexController::class, 'nav']);