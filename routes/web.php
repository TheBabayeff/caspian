<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Route;

Route::get('language/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'az', 'ch' , 'ru', 'tr']))
    {
        abort(400);
    }
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');


Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/sectors', [SectorController::class, 'index'])->name('sectors');
Route::get('/sectors/{slug}', [SectorController::class, 'show'])->name('sector.show');


Route::get('/manufactures', [ManufactureController::class, 'index'])->name('manufactures');
Route::get('/manufactures/{slug}', [ManufactureController::class, 'show'])->name('manufacture.show');

Route::post('/request-call' , [HomeController::class, 'requestCall'])->name('request.call');
