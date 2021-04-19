<?php

use App\Http\Controllers\MailController;
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

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setLocale'], function(){
    Route::get('/',[\App\Http\Controllers\MainController::class, 'index'])->name('home');
    Route::get('/contact',[\App\Http\Controllers\MainController::class, 'contact'])->name('contact');
    Route::get('/about',[\App\Http\Controllers\MainController::class, 'about'])->name('about');
    Route::get('/footballcamps',[\App\Http\Controllers\FootballcampController::class, 'index'])->name('footballcamps');
    Route::get('/footballcamp/{id?}',[\App\Http\Controllers\FootballcampController::class, 'show'])->name('footballcamp');
    Route::post('booking',[\App\Http\Controllers\FootballcampController::class, 'booking'])->name('booking');
    Route::get('/bateaux',[\App\Http\Controllers\BateauxController::class, 'index'])->name('bateaux');
    Route::post('booking-boat',[\App\Http\Controllers\BateauxController::class, 'booking'])->name('booking-boat');
    Route::post('contactform',[\App\Http\Controllers\MainController::class, 'contactform'])->name('contactform');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});
