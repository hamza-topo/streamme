<?php

use App\Http\Controllers\Web\AnimeController;
use App\Http\Controllers\Web\HomeController;
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

Route::group(['domain' => env('BACK_DOMAIN', 'app.streame.loc')],
    function () {
        Route::get('/',HomeController::class);
        Route::get('/animes',AnimeController::class)->name('animes');
        Route::get('/animes/create',[AnimeController::class,'create'])->name('animes.create');
        Route::get('/animes/{id}/edit',[AnimeController::class,'edit'])->name('animes.edit');
    }
);



