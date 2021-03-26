<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Tenancy;


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[CategoryController::class,'listCategories'])->name('home');
Route::get('/cars/{category}',[CarController::class, 'showCarsByCategory'])->name('listCars');
Route::middleware(['auth:sanctum', 'verified'])->resource('admin_cars',App\Http\Controllers\Admin\CarController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('admin_categories',App\Http\Controllers\Admin\CategoryController::class);
Route::get('/tenant', [Tenancy::class,'list'])->name('listTenant');