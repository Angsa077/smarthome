<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LampController;
use Illuminate\Support\Facades\Route;

// Lamps
Route::get('/', [LampController::class, 'index'])->name('lamps.index');

// Update lamps
Route::post('/lamps/{id}', [LampController::class, 'updateLamp'])->name('lamps.update');

// histories
Route::get('/histories', [HistoryController::class, 'index'])->name('histories.index');