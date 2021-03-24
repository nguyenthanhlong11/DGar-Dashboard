<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/listUser', 'App\Http\Controllers\UserController@getList');
// Route::get('/listProfile', 'App\Http\Controllers\UserController@getList');
// Route::get('/listHistoryReport', 'App\Http\Controllers\HistoryReportController@getList');
// Route::get('/listBinLocation', 'App\Http\Controllers\BinLocationController@getList');

// Route::get('/countLocationByMonth', 'App\Http\Controllers\HistoryReportController@getLocationHandled');
Route::post("/auth/login",[LoginController::class,"login"]);
Route::post("/auth/signup",[RegisterController::class,"store"]);