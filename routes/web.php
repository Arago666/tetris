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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/order', [App\Http\Controllers\Order\OrderController::class, 'index'])->name('orders')->middleware('auth');
Route::get('/tetris', [App\Http\Controllers\TetrisController::class, 'index'])->name('tetris');

//Route::get('{any?}', function () {
//    return view('home');
//})->where('any', '.*');
