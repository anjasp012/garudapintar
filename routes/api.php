<?php

use App\Http\Controllers\TripayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('tripay-callback', [TripayController::class, 'callback'])->name('tripay.callback');
