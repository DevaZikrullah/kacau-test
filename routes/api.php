<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\database;

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

Route::get('/test', [
    database::class, 'connect'
]);

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('/login', [
        AuthController::class, 'login'
    ]);

    Route::post('/logout', [
        AuthController::class, 'logout'
    ]);

    Route::post('/refresh', [
        AuthController::class, 'refresh'
    ]);

    Route::post('/me', [
        AuthController::class, 'me'
    ]);

    Route::get('/kendaraan', [KendaraanController::class , 'getAllKendaraan']);
    Route::post('/belimobil', [\App\Repositories\TransaksiRepository::class , 'addTransaksiMobil']);
    Route::post('/belimotor', [\App\Repositories\TransaksiRepository::class , 'addTransaksiMotor']);
    Route::get('/history', [\App\Repositories\TransaksiRepository::class , 'getHistory']);
    Route::get('/latest-history', [\App\Repositories\TransaksiRepository::class , 'getLatestHistory']);

});
