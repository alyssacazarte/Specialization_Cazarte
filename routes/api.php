<?php

use App\Http\Controllers\BackendController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("get", [BackendController::class, 'index']);
Route::post("create", [BackendController::class, 'store']);
Route::get('get/{id}', [BackendController::class, 'show']);
Route::delete('delete/{id}', [BackendController::class, 'destroy']);
Route::put('update/{id}', [BackendController::class, 'update']);