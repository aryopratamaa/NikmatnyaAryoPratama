<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnertypeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PromoController;

Route::get("/", [DashboardController::class, 'index']);

Route::resource('partnertype', PartnertypeController::class);
Route::resource('partner', PartnerController::class);
Route::resource('user', UserController::class);
Route::resource('promo', PromoController::class);
