<?php

use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\LampController;
use App\Http\Controllers\Api\StatusController;
use Illuminate\Support\Facades\Route;

// Lamps
Route::get('/lamps', [LampController::class, 'index']);

// Update lamp
Route::post('/lamps/{id}', [LampController::class, 'updateLamp']);

// Status lamp
Route::get('/status', [StatusController::class, 'index']);

// Histories
Route::get('/histories', [HistoryController::class, 'index']);