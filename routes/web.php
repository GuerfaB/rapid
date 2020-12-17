<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Route Accueil site Rapid
Route::get("/accueil", [AccueilController::class, "index"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
// Route Menu
Route::get("/admin/menu", [MenuController::class, "index"])->name("menu");
// Route User
Route::resource("/user", UserController::class);
// Route Banner 
Route::resource("/banner", BannerController::class);
// Route About
Route::resource("/about", AboutController::class);
// Route Service
Route::resource("/service", ServiceController::class);
// Route Feature
Route::resource("/feature", FeatureController::class);
// Route Portfolio
Route::resource("/portfolio", PortfolioController::class);
// Route Testimonial
Route::resource("/testimonial", TestimonialController::class);