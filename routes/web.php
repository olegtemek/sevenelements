<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\IntroController;
use App\Http\Controllers\authController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\DetailController;
use App\Http\Controllers\admin\HeroController;
use App\Http\Controllers\admin\InstagramController;
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
    Route::put('/{id}', [HomeController::class, 'update'])->name('contact.update');
    Route::resource('/intro', IntroController::class);
    Route::resource('/color', ColorController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/hero', HeroController::class);
    Route::resource('/detail', DetailController::class);
    Route::get('/inst/insta-token-check', [InstagramController::class, 'index'])->name('insta.index');
});
Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/login', [authController::class, 'request'])->name('login.post');

Route::get('/', [ControllersHomeController::class, 'index']);
Route::post('/send', [ControllersHomeController::class, 'send']);
Route::post('/product', [ControllersHomeController::class, 'product']);



Route::get('/inst/insta-token-check/check', [InstagramController::class, 'instaToken'])->name('insta.check');
Route::get('/inst/insta-token-check/get', [InstagramController::class, 'getPosts'])->name('insta.get');
