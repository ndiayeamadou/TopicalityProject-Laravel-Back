<?php

use App\Http\Controllers\TopicalityController;
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


Route::apiResource('/topicality', TopicalityController::class);
//pour protéger nos routes
/* 
Route::middleware('auth:api')->group( function () {
    //now url?api_token=token
    Route::apiResource('/topicality', TopicalityController::class);
});
 */
