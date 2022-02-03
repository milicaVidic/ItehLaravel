<?php

use App\Http\Controllers\PevacController;
use App\Http\Controllers\TPController;
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

Route::resource('tekstopisac', TPController::class)->only('index', 'show', 'update', 'destroy');
Route::resource('pevac', PevacController::class)->only('index', 'show');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
