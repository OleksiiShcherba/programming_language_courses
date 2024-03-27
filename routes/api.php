<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhpController;

Route::post(
    '/php',
    [PhpController::class, 'goPhp']
);
