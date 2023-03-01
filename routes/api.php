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
    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/Products/{id}', 'show');
        Route::get('/Products/{id}/edit', 'edit');
        Route::post('/Products', 'store');
        Route::patch('/Products/{id}', 'update');
        Route::delete('/product/delete/{id}', 'destroy');

    }    );
    Route::controller(ClientController::class)->group(function () {
        Route::get('/clients', 'index');
        Route::get('/client/{id}', 'show');
        Route::get('/client/{id}/edit', 'edit');
        Route::post('/client', 'store');
        Route::patch('/client/{id}', 'update');
        Route::delete('/client/{id}', 'destroy');
    });

});
