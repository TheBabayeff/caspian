<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/sectors', [SectorController::class, 'index'])->name('sectors');
Route::get('/sectors/{slug}', [SectorController::class, 'show'])->name('sector.show');


Route::get('/manufactures', [ManufactureController::class, 'index'])->name('manufactures');
Route::get('/manufactures/{slug}', [ManufactureController::class, 'show'])->name('manufacture.show');
