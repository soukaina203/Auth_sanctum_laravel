<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::post('/signUp',[userController::class,'signup']);
Route::post('/login',[userController::class,'login']);

Route::group(['middleware'=> ['auth:sanctum']], function(){

    Route::get('/product/get', [ProductController::class,'index']);
    Route::get('/product/show/{id}', [ProductController::class,'show']);
    Route::post('/product/add', [ProductController::class,'store']);
    Route::get('/product/edit/{id}', [ProductController::class,'edit']);
    Route::patch('/product/{id}', [ProductController::class,'update']);
    Route::post('/product/delete/{id}', [ProductController::class,'destroy']);
});
