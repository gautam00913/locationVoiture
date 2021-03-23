<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[CategoryController::class,'listCategories'])->name('home');
Route::get('/cars/{category}',[CarController::class, 'showCarsByCategory'])->name('listCars');
