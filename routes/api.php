<?php

use App\Http\Controllers\ScraperController;
use Illuminate\Support\Facades\Route;

Route::post('/getCoin',[ScraperController::class, 'prepare']);
Route::post('/getCoinUsingPython',[ScraperController::class, 'usingPython']);

Route::get('/', function () {
    return 'ola';
});
