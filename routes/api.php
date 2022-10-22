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


Auth::routes();

Route::group([
    'middleware' => 'auth:sanctum'
], function () {
    Route::group([
        'prefix' => 'user'
    ], function () {
        Route::get('/', [\App\Http\Controllers\UserController::class, 'user']);
        Route::get('/cards', [\App\Http\Controllers\UserController::class, 'cards']);
    });



    Route::group(['prefix' => 'card'] ,function () {
        Route::post('/create', [\App\Http\Controllers\CardController::class, 'create']);
        Route::resource('cards', \App\Http\Resources\CardResource::class);
    });
});
