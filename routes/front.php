<?php

use App\Http\Controllers\Front\HomeController;
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
// 127.0.0.1 front.streame.loc
// 127.0.0.1 app.stream.loc

// Route::group(['domain' => env('FRONT_DOMAIN', 'front.streame.loc')],
//     function () {

//     }
// );


Route::get('/', function () {
    return view('front.home');
});
Route::get('/', HomeController::class);
