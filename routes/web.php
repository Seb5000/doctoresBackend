<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;


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
    return view('welcome');
});


/************************************ Material *****************/
Route::group(['prefix' => 'Doctor'], function () {
    Route::get('/list', [DoctorController::class, 'list']);
    Route::post('/destroy', [DoctorController::class, 'destroy']);
    Route::get('/store', [DoctorController::class, 'store']);
    Route::get('/show', [DoctorController::class, 'show']);
});
