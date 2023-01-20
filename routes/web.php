<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\IntroController;
use App\Http\Controllers\authController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\HeroController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\HomeController as ControllersHomeController;
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



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::resource('/intro', IntroController::class);
    Route::resource('/color', ColorController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/hero', HeroController::class);
});
Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/login', [authController::class, 'request'])->name('login.post');

Route::get('/', [ControllersHomeController::class, 'index']);
