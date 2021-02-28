<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);

Route::prefix('product') -> group(function() {
    Route::get('/', [HomeController::class, 'productBeranda']);
});

Route::get('/news/{title}', [HomeController::class, 'news']);

Route::prefix('program') -> group(function() {
    Route::get('/', [HomeController::class, 'programBeranda']);
});

Route::get('/about-us', [HomeController::class, 'about']);

Route::resource('/contact-us', ContactUsController::class)->only(['index']);
Route::resource('/admin', ContactUsController::class)->only(['store']);


