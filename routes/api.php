<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
->middleware('auth:sanctum')
|
*/

Route::post('/signUp',[userController::class,'signup']);
Route::post('/login',[userController::class,'login']);
Route::middleware('auth:sanctum')->group(function () {

});
