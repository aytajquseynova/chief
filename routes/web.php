<?php

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\OurTeamController;
use App\Http\Controllers\front\OurTeamsController;
use App\Http\Controllers\front\PrivacyController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\front\ProductsController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\front\ServicesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/ourteam', [OurTeamController::class, 'index'])->name('ourteam');

Route::get('/ourteams', [OurTeamsController::class, 'index'])->name('ourteams');

Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/services', [ServicesController::class, 'index'])->name('services');