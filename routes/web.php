<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnertypeController;

Route::get("/", [DashboardController::class, 'index']);

Route::resource('partnertype', PartnertypeController::class);


