<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all-games',[\App\Http\Controllers\GameController::class,'allGame'])->name('all.game');
Route::get('/today-games',[\App\Http\Controllers\GameController::class,'todayGame'])->name('today.game');
Route::get('/yesterday-games',[\App\Http\Controllers\GameController::class,'yesterdayGame'])->name('yesterday.game');
Route::get('/tomorrow-games',[\App\Http\Controllers\GameController::class,'tomorrowGame'])->name('tomorrow.game');
