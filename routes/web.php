<?php

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

Route::get('/',[\App\Http\Controllers\MainController::class, 'index'])->name('home');

Route::get('/contact',[\App\Http\Controllers\MainController::class, 'contact'])->name('contact');

Route::get('/about',[\App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::get('/footballcamps',[\App\Http\Controllers\FootballcampController::class, 'index'])->name('footballcamps');

Route::get('/footballcamp/{id}',[\App\Http\Controllers\FootballcampController::class, 'show'])->name('footballcamp');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
