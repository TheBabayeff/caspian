<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/sectors', [SectorController::class, 'index'])->name('sectors');
Route::get('/sectors/{slug}', [SectorController::class, 'show'])->name('sector.show');


Route::get('/manufactures', [ManufactureController::class, 'index'])->name('manufactures');
Route::get('/manufactures/{slug}', [ManufactureController::class, 'show'])->name('manufacture.show');

Route::post('/request-call' , [HomeController::class, 'requestCall'])->name('request.call');
