<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
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

/************************************ Material *****************/
Route::group(['prefix' => 'Doctor'], function () {
    Route::get('/list', [DoctorController::class, 'list']);
    Route::post('/destroy', [DoctorController::class, 'destroy']);
    Route::post('/store', [DoctorController::class, 'store']);
    Route::get('/show', [DoctorController::class, 'show']);
});
