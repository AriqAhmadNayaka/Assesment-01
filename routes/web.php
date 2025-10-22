<?php

use App\Http\Controllers\SmartfloodController;
use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SmartfloodController::class, 'index']);
Route::get('/tentang', [SmartfloodController::class, 'tentang']);
Route::get('/sensor', [SensorController::class, 'sensor']);
Route::post('/proses-data', [SensorController::class, 'prosesData']);
