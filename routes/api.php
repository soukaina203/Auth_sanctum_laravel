<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\suplierController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::post('/signUp',[userController::class,'signup']);
Route::post('/login',[userController::class,'login']);
// CRUD  produits
Route::group(['middleware'=> ['auth:sanctum']], function(){
    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/product/show/{id}', 'show');
        Route::get('/Products/edit/{id}', 'edit');
        Route::post('/Product/add', 'store');

        Route::patch('/Products/{id}', 'update');
        Route::delete('/product/delete/{id}', 'destroy');

    }    );
// CRUD  clients

    Route::controller(ClientController::class)->group(function () {
        Route::get('/clients', 'index');
        Route::get('/client/{id}', 'show');
        Route::get('/client/edit/{id}', 'edit');

        Route::post('/client/add', 'store');
        Route::patch('/client/{id}', 'update');

        Route::delete('/client/d/{id}', 'destroy');
    });
// CRUD  fournisseur

Route::controller(suplierController::class)->group(function () {
    Route::get('/clients', 'index');
    Route::get('/client/{id}', 'show');
    Route::get('/client/edit/{id}', 'edit');

    Route::post('/client/add', 'store');
    Route::patch('/client/{id}', 'update');

    Route::delete('/client/d/{id}', 'destroy');
});
});
