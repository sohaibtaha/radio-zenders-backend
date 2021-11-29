<?php

use App\Http\Controllers\ZenderController;
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

// dsdfdfdfdf

Route::get('/zenders', [ZenderController::class, 'index']);
Route::post('/zenders', [ZenderController::class, 'store']);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/zenders',[ZenderController::class,'index']);
Route::get('/zenders/search/{name}',[ZenderController::class,'search']);
Route::post('/zenders',[ZenderController::class,'store']);
Route::put('/zenders/{id}',[ZenderController::class,'update']);
Route::delete('/zenders/{id}',[ZenderController::class,'destroy']);
Route::get('/zenders/{id}',[ZenderController::class,'show']);
Route::post('/logout',[AuthController::class,'logout']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
