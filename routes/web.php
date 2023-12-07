<?php

use App\Http\Controllers\LampController;
use Illuminate\Support\Facades\Route;

// Lamps
Route::get('/', [LampController::class, 'index'])->name('lamps.index');